<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    echo "<h3 style='color: blue;'>GET Method Received:</h3>";
    echo "<p>Name: " . htmlspecialchars($_GET['name']) . "</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    echo "<h3 style='color: green;'>POST Method Received:</h3>";
    echo "<p>Username: " . htmlspecialchars($_POST['username']) . "</p>";
    echo "<p>Password: (hidden for security)</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling Example</title>
</head>
<body>
    <h2>GET Form</h2>
    <form method="GET">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Submit via GET">
    </form>

    <h2>POST Form</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Submit via POST">
    </form>

    <h2>PHP Magic Constants Example</h2>
    <?php
        echo "<p><b>Current Line:</b> " . __LINE__ . "</p>";
        echo "<p><b>Current File:</b> " . __FILE__ . "</p>";
        echo "<p><b>Current Directory:</b> " . __DIR__ . "</p>";

        function demoFunction() {
            echo "<p><b>Function Name:</b> " . __FUNCTION__ . "</p>";
        }
        demoFunction();
    ?>
</body>
</html>
