<?php
header("Content-Type: application/json");

// Assuming the JSON file is located in the same directory as this PHP script
$filename = "mycollection.json";
if (file_exists($filename)) {
    echo file_get_contents($filename);
} else {
    echo json_encode(["error" => "File not found"]);
}
?>
