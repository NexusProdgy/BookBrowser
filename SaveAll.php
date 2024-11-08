<?php
$filename = 'mycollection.json';
$data = json_decode(file_get_contents('php://input'), true);

if (file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT))) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Failed to save data."]);
}
?>
