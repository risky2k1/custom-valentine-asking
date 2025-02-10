<?php
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    $action = $data['action'];
    $count = $data['count'];
    $ip = $_SERVER['REMOTE_ADDR']; // Lấy IP người dùng

    $logEntry = date('Y-m-d H:i:s') . " | IP: $ip | Action: $action | No Count: $count\n";
    
    file_put_contents('click_log.txt', $logEntry, FILE_APPEND);
}
?>