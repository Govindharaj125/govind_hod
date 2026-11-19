<?php
session_start();
require_once "db.php";
header('Content-Type: application/json');

// Only allow admin users
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Admin') {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    $sql = "SELECT Uname, Role FROM Logtab ORDER BY Uname";
    $result = $conn->query($sql);
    $users = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo json_encode(["success" => true, "data" => $users]);
    } else {
        echo json_encode(["success" => false, "message" => "Query failed"]);
    }
    break;

  case 'POST':
    $data = json_decode(file_get_contents('php://input'), true);
    $username = trim($data['username']);
    $password = $data['password'];
    $role = $data['role'];

    if (!$username || !$password || !$role) {
      echo json_encode(["success" => false, "message" => "Missing fields"]);
      exit;
    }

    $salt = bin2hex(random_bytes(4));
    $hash = hash('sha256', $salt . $password);

    $sql = "INSERT INTO Logtab (Uname, PasswrdHash, PasswrdSalt, Role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $hash, $salt, $role);
    if ($stmt->execute()) {
      echo json_encode(["success" => true]);
    } else {
      echo json_encode(["success" => false, "message" => "Insert failed"]);
    }
    break;

  case 'PUT':
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $data['username'];
    $role = $data['role'];

    if (!$username || !$role) {
      echo json_encode(["success" => false, "message" => "Missing fields"]);
      exit;
    }

    if (!empty($data['password'])) {
      $salt = bin2hex(random_bytes(4));
      $hash = hash('sha256', $salt . $data['password']);
      $sql = "UPDATE Logtab SET PasswrdHash = ?, PasswrdSalt = ?, Role = ? WHERE Uname = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $hash, $salt, $role, $username);
    } else {
      $sql = "UPDATE Logtab SET Role = ? WHERE Uname = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ss", $role, $username);
    }
    if ($stmt->execute()) {
      echo json_encode(["success" => true]);
    } else {
      echo json_encode(["success" => false, "message" => "Update failed"]);
    }
    break;

  case 'DELETE':
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $data['username'] ?? null;
    if (!$username) {
      echo json_encode(["success" => false, "message" => "Username required"]);
      exit;
    }
    $sql = "DELETE FROM Logtab WHERE Uname = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    if ($stmt->execute()) {
      echo json_encode(["success" => true]);
    } else {
      echo json_encode(["success" => false, "message" => "Delete failed"]);
    }
    break;

  default:
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
?>
