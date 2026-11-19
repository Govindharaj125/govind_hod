<?php
session_start();
require_once "memberdb.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

if (!isset($_SESSION['username'])) {
    echo json_encode(["success" => false, "message" => "Unauthorized"]);
    exit;
}

if (!$conn || $conn->connect_error) {
    error_log("DB connection error: " . ($conn ? $conn->connect_error : "No connection"));
    echo json_encode(["success" => false, "message" => "DB connection failed"]);
    exit;
}

$cardNo = isset($_GET['cardNo']) ? trim($_GET['cardNo']) : "";
$searchNameMobile = isset($_GET['searchNameMobile']) ? trim($_GET['searchNameMobile']) : "";

if ($cardNo !== "") {
    $sql = "SELECT * FROM masterdb WHERE NewCardNo = ? LIMIT 10";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        error_log("SQL Prepare failed: " . $conn->error . " | SQL=" . $sql);
        echo json_encode(["success" => false, "message" => "SQL Prepare failed"]);
        exit;
    }
    $stmt->bind_param("ss", $cardNo, $cardNo);
} elseif ($searchNameMobile !== "") {
    $sql = "SELECT * FROM masterdb WHERE MemberName LIKE ? OR MobNo LIKE ? LIMIT 10";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        error_log("SQL Prepare failed: " . $conn->error . " | SQL=" . $sql);
        echo json_encode(["success" => false, "message" => "SQL Prepare failed"]);
        exit;
    }
    $like = "%$searchNameMobile%";
    $stmt->bind_param("ss", $like, $like);
} else {
    echo json_encode(["success" => false, "message" => "No search parameter provided"]);
    exit;
}

if (!$stmt->execute()) {
    error_log("SQL Execute failed: " . $stmt->error);
    echo json_encode(["success" => false, "message" => "SQL Execute failed"]);
    exit;
}

$result = $stmt->get_result();
if (!$result) {
    error_log("Get result failed: " . $stmt->error);
    echo json_encode(["success" => false, "message" => "Failed to get query result"]);
    exit;
}

$rows = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode(["success" => true, "data" => $rows]);
