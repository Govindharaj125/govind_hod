<?php
session_start();
require_once "db.php";
header('Content-Type: application/json');

// Use user-provided query for summarizing carol visit areas
$sql = "
SELECT 
    CarolRoundArea,
    COUNT(*) AS AreaCount
FROM (
    SELECT 
        m.NewCardNo,
        MAX(CASE WHEN m.Suffix = 'H' THEN m.CarolRoundArea END) AS CarolRoundArea
    FROM masterdb m
    WHERE m.Status = 'Active'
    GROUP BY m.NewCardNo
) AS grouped_families
GROUP BY CarolRoundArea
ORDER BY AreaCount DESC
";

$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    $error = sqlsrv_errors();
    echo json_encode(["success" => false, "message" => "Query failed", "error" => $error]);
    exit;
}

$areas = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $areas[] = $row;
}

echo json_encode(["success" => true, "data" => $areas]);
?>
