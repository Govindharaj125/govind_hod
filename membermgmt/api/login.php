<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once "db.php";

header('Content-Type: application/json');

if (stripos($_SERVER['CONTENT_TYPE'] ?? '', 'application/json') !== false) {
    // JSON input
    $data = json_decode(file_get_contents('php://input'), true);
    $username = isset($data['username']) ? trim($data['username']) : '';
    $password = isset($data['password']) ? $data['password'] : '';
} else {
    // Form POST input
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
}

if (!$username || !$password) {
    echo json_encode(["success" => false, "message" => "Username and password required"]);
    exit;
}

// Prepare MySQL query
$sql = "SELECT PasswrdHash, PasswrdSalt, Role 
        FROM Logtab 
        WHERE TRIM(Uname) = ?";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(["success" => false, "message" => "Database query failed"]);
    exit;
}

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    echo json_encode(["success" => false, "message" => "Invalid username or password"]);
    exit;
}

$hash = $row['PasswrdHash'];
$salt = $row['PasswrdSalt'];
$role = trim($row['Role']);

$hashed_input = hash('sha256', $salt . $password);

if ($hashed_input === $hash) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    echo json_encode(["success" => true, "role" => $role]);
} else {
    echo json_encode(["success" => false, "message" => "Invalid username or password"]);
}
?>
