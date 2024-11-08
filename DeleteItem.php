<?php
header("Content-Type: application/json");

$filename = "mycollection.json";
$index = isset($_POST['index']) ? intval($_POST['index']) : null;

if (file_exists($filename) && $index !== null) {
    $data = json_decode(file_get_contents($filename), true);
    if (isset($data[$index])) {
        array_splice($data, $index, 1); // Remove item at the given index
        file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => "Item not found"]);
    }
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>
