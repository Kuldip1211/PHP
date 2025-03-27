<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name'])) {
    echo "<h2>GET Method Output</h2>";
    echo "Hello, " . htmlspecialchars($_GET['name']) . "<br><br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>POST Method Output</h2>";
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    
    if (!$email) {
        echo "Invalid Email Address!";
    } else {
        echo "Hello, " . $name . " - Your email is " . $email . "<br><br>";
    }
}

if (isset($_REQUEST['age'])) {
    echo "<h2>REQUEST Method Output</h2>";
    echo "Your age is: " . htmlspecialchars($_REQUEST['age']) . "<br><br>";
}
?>

<h2>GET Form</h2>
<form method="GET">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>

<h2>POST Form</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your email">
    <input type="submit" value="Submit">
</form>

<h2>REQUEST Form</h2>
<form method="POST">
    <input type="number" name="age" placeholder="Enter your age">
    <input type="submit" value="Submit">
</form>

<h2>Pagination with GET</h2>
<a href="?page=1">Page 1</a>
<a href="?page=2">Page 2</a>
<a href="?page=3">Page 3</a>

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
echo "<h3>You are on page: " . htmlspecialchars($page) . "</h3>";
?>
