<?php
// Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// File paths
$textFile = "example.txt";
$jsonFile = "data.json";
$csvFile = "data.csv";
$uploadDir = "uploads/";

// Create uploads directory if not exists
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// 1️⃣ Writing to a Text File
file_put_contents($textFile, "Hello, this is a test file!");
echo "<b>Text File Created:</b> " . file_get_contents($textFile) . "<br><br>";

// 2️⃣ Handling JSON Data
$data = ["name" => "John Doe", "email" => "john@example.com"];
file_put_contents($jsonFile, json_encode($data));
$jsonData = json_decode(file_get_contents($jsonFile), true);
echo "<b>JSON Data:</b> Name - " . $jsonData["name"] . ", Email - " . $jsonData["email"] . "<br><br>";

// 3️⃣ Handling CSV Files (Write & Read)
$csvHandle = fopen($csvFile, "w");
fputcsv($csvHandle, ["Name", "Email"]);
fputcsv($csvHandle, ["Alice", "alice@example.com"]);
fputcsv($csvHandle, ["Bob", "bob@example.com"]);
fclose($csvHandle);

// Read CSV
$csvHandle = fopen($csvFile, "r");
echo "<b>CSV Data:</b><br>";
while (($data = fgetcsv($csvHandle)) !== FALSE) {
    echo "Name: " . $data[0] . " - Email: " . $data[1] . "<br>";
}
fclose($csvHandle);
echo "<br>";

// 4️⃣ File Upload Handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetFile = $uploadDir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "<b>File Uploaded:</b> " . basename($_FILES["fileToUpload"]["name"]) . "<br>";
    } else {
        echo "<b>Error uploading file!</b><br>";
    }
}

// 5️⃣ File Download
if (isset($_GET["download"])) {
    header("Content-Type: text/plain");
    header("Content-Disposition: attachment; filename=download.txt");
    echo "This is a sample download file.";
    exit;
}

// 6️⃣ Deleting a File
if (isset($_GET["delete"])) {
    if (file_exists($textFile)) {
        unlink($textFile);
        echo "<b>File Deleted:</b> $textFile<br>";
    } else {
        echo "<b>File does not exist!</b><br>";
    }
}

?>

<!-- Upload Form -->
<h2>Upload a File</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="file">Choose File:</label>
    <input type="file" name="fileToUpload" required>
    <input type="submit" value="Upload">
</form>

<!-- Download File -->
<h2>Download a File</h2>
<a href="?download=true"><button>Download File</button></a>

<!-- Delete File -->
<h2>Delete a File</h2>
<a href="?delete=true"><button>Delete File</button></a>
