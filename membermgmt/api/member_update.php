<?php
session_start();
require_once "db.php"; // Your db.php must create $conn as mysqli connection
header('Content-Type: application/json');

if (!isset($_SESSION['username'])) {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $cardNo = $_GET['cardNo'] ?? null;
        $searchNameMobile = $_GET['searchNameMobile'] ?? null;

        if ($cardNo) {
            $sql = "SELECT id, NewCardNo, MemberName, MobNo, Address, CarolRoundArea, CarolLat, CarolLng, MapURL, Suffix
                FROM masterdb WHERE NewCardNo = ? AND Suffix IN ('H', 'S') ORDER BY CASE WHEN Suffix = 'H' THEN 1 ELSE 2 END";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $cardNo);
        } elseif ($searchNameMobile) {
            $sql = "SELECT id, NewCardNo, MemberName, MobNo, Address, CarolRoundArea, CarolLat, CarolLng, MapURL, Suffix
                FROM masterdb WHERE (MemberName LIKE ? OR MobNo LIKE ?) AND Suffix IN ('H', 'S') ORDER BY CASE WHEN Suffix = 'H' THEN 1 ELSE 2 END";
            $like = '%' . $searchNameMobile . '%';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $like, $like);
        } else {
            echo json_encode(["success" => false, "message" => "Missing search criteria"]);
            exit;
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $results = [];
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
        if (count($results) === 0) {
            echo json_encode(["success" => false, "message" => "Member not found"]);
            exit;
        }
        echo json_encode(["success" => true, "data" => $results]);
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'] ?? null;
        if (!$id) {
            echo json_encode(["success" => false, "message" => "Missing record id"]);
            exit;
        }
        $memberName = $data['MemberName'] ?? '';
        $mobNo = $data['MobNo'] ?? '';
        $address = $data['Address'] ?? '';
        $carolRoundArea = $data['CarolRoundArea'] ?? '';
        $latitude = $data['CarolLat'] ?? null;
        $longitude = $data['CarolLng'] ?? null;
        $mapUrl = $data['MapURL'] ?? '';

        $sql = "UPDATE masterdb SET MemberName = ?, MobNo = ?, Address = ?, CarolRoundArea = ?, CarolLat = ?, CarolLng = ?, MapURL = ?, EditBy = ?, EditDt = NOW() WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssi", $memberName, $mobNo, $address, $carolRoundArea, $latitude, $longitude, $mapUrl, $_SESSION['username'], $id);

        if ($stmt->execute()) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Update failed"]);
        }
        break;

    default:
        echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
