<?php
$filename = 'mycollection.json';
$index = isset($_GET['index']) ? (int)$_GET['index'] : 0;

if (file_exists($filename)) {
    $data = json_decode(file_get_contents($filename), true);
    if (isset($data[$index])) {
        echo json_encode($data[$index]);
    } else {
        echo json_encode(["error" => "Item not found."]);
    }
} else {
    echo json_encode(["error" => "File not found."]);
}
?>

