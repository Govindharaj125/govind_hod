<?php
session_start();
require_once "db.php";
header('Content-Type: application/json');

if (!isset($_SESSION['username'])) {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    $date = $_GET['date'] ?? null;
    $params = [];
    $sql = "SELECT * FROM CarolRounds";
    if ($date) {
        $sql .= " WHERE CAST(RoundDate AS DATE) = ?";
        $params[] = $date;
    }
    $sql .= " ORDER BY RoundDate DESC";

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        echo json_encode(["success" => false, "message" => "Query failed"]);
        exit;
    }
    $rows = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $rows[] = $row;
    }
    echo json_encode(["success" => true, "data" => $rows]);
    break;

  case 'POST':
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $_SESSION['username'];

    $roundDate = $data['roundDate'] ?? null;
    $dayOfVisit = $data['dayOfVisit'] ?? null;
    $locations = $data['locations'] ?? [];
    $remarks = $data['remarks'] ?? '';

    if (!$roundDate || !$dayOfVisit || empty($locations)) {
        echo json_encode(["success" => false, "message" => "Missing required fields"]);
        exit;
    }

    $errors = [];
    foreach ($locations as $location) {
        $sql = "INSERT INTO CarolRounds 
            (UserName, RoundDate, Location, DayOfVisit, Remarks, CreatedAt)
            VALUES (?, ?, ?, ?, ?, GETDATE())";

        $params = [$username, $roundDate, $location, $dayOfVisit, $remarks];
        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            $errors[] = "Failed to insert location: $location";
        }
    }

    if (!empty($errors)) {
        echo json_encode(["success" => false, "message" => implode("; ", $errors)]);
    } else {
        echo json_encode(["success" => true]);
    }
    break;

  default:
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}
?>
