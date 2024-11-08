<?php
$filename = 'mycollection.json';
$input = json_decode(file_get_contents('php://input'), true);
$index = $input['index'];
$data = $input['data'];

if (file_exists($filename)) {
    $collection = json_decode(file_get_contents($filename), true);
    $collection[$index] = $data;
    file_put_contents($filename, json_encode($collection, JSON_PRETTY_PRINT));
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "File not found."]);
}
?>

