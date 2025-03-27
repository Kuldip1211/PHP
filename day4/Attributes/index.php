<?php
// PHP Variables
$siteName = "My Website";
$username = "Kuldeep";

// PHP Constants
define("SITE", "My Website");
define("VERSION", "1.0.0");

// Displaying Variables and Constants
echo "<h2>Variable Handling & Constants Example 🚀</h2>";
echo "<p><b>Website Name (Variable):</b> $siteName</p>";
echo "<p><b>Website Name (Constant):</b> " . SITE . "</p>";
echo "<p><b>Version:</b> " . VERSION . "</p>";

// Global and Local Scope
$globalVar = "I am Global";
function testScope() {
    global $globalVar;
    echo "<p><b>Inside Function (Global Variable):</b> $globalVar</p>";
}
testScope();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Form Example</title>
</head>
<body>

    <h2>PHP Form Input Attributes & Control Types 🎛️</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submittedUsername = htmlspecialchars($_POST['username']);
        $submittedEmail = htmlspecialchars($_POST['email']);
        $submittedAge = htmlspecialchars($_POST['age']);

        echo "<h3>Submitted Data ✅</h3>";
        echo "<p><b>Username:</b> $submittedUsername</p>";
        echo "<p><b>Email:</b> $submittedEmail</p>";
        echo "<p><b>Age:</b> $submittedAge</p>";
    }
    ?>

    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Enter Username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" name="age" placeholder="Enter Age" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>
