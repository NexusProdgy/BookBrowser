<?php
$filename = 'mycollection.json';

if (file_exists($filename)) {
    $data = json_decode(file_get_contents($filename), true);
    $totalItems = count($data);
    echo json_encode(["total" => $totalItems]);
} else {
    echo json_encode(["error" => "File not found."]);
}
?>
