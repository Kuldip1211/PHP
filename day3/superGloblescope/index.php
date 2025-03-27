<?php
// Start session to use $_SESSION
session_start();

// Setting a global variable
$globalVar = "I am a global variable";

function testGlobal() {
    echo "Global Variable: " . $GLOBALS['globalVar'] . "<br>";
}
testGlobal();

// Handling $_GET
if (isset($_GET['name'])) {
    echo "Hello, " . htmlspecialchars($_GET['name']) . " (Received via GET method)<br>";
}

// Handling $_POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    echo "Welcome, " . htmlspecialchars($_POST['username']) . " (Received via POST method)<br>";
}

// Displaying server-related information with $_SERVER
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "User IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";

// Handling $_SESSION
if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "Kuldeep";
    echo "Session set for user.<br>";
} else {
    echo "User (from session): " . $_SESSION["user"] . "<br>";
}

// Handling $_COOKIE
if (!isset($_COOKIE["user"])) {
    setcookie("user", "Kuldeep", time() + 3600); // Expires in 1 hour
    echo "Cookie set for user.<br>";
} else {
    echo "Welcome back, " . $_COOKIE["user"] . " (Retrieved from Cookie)<br>";
}

// Handling file upload with $_FILES
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $file_name = $_FILES["fileToUpload"]["name"];
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $file_name);
    echo "File uploaded successfully.<br>";
}
?>

<!-- HTML Form for GET and POST methods -->
<form method="GET">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit via GET">
</form>

<form method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit" value="Submit via POST">
</form>

<!-- File Upload Form -->
<form method="POST" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload">
</form>