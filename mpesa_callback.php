<?php

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

$fileName = 'form.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Read the JSON data from the request body
    $formData = json_decode(file_get_contents('php://input'), true);

    // Read the existing data from the JSON file
    $existingData = file_get_contents($fileName);
    $data = json_decode($existingData, true);

    // Write the merged data to the JSON file
    $combined_data = (object) array_merge((array) $data, (array) $formData);
    file_put_contents($fileName, json_encode($combined_data, JSON_PRETTY_PRINT));
    echo "Data saved to " . $fileName;
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (file_exists($fileName)) {
        $existingData = file_get_contents($fileName);
        $data = json_decode($existingData, true);

        // Display the data
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "No data available.";
    }
} else {
    echo "Invalid request method.";
}
?>