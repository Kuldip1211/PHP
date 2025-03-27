<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "<h2>Received via GET:</h2>";
    echo "<p>Name: $name</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'], $_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']); // Never store plain passwords
    echo "<h2>Received via POST:</h2>";
    echo "<p>Username: $username</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling Example</title>
</head>
<body>

    <h2>GET Method Form</h2>
    <form method="GET">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="submit" value="Submit via GET">
    </form>

    <h2>POST Method Form</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" value="Submit via POST">
    </form>

</body>
</html>
