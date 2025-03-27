# 📌 <span style="color:#007bff;">PHP Super Global Variables</span>

Super Global Variables are built-in global arrays in PHP that provide access to various types of data such as form inputs, session data, cookies, and server information. These variables are always accessible, regardless of scope.

## 🚀 <span style="color:#28a745;">List of PHP Super Global Variables</span>

<table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width:100%; text-align:left;">
<tr>
<th style="background-color:#f8f9fa;">Super Global</th>
<th style="background-color:#f8f9fa;">Description</th>
</tr>
<tr>
<td><code>$_GET</code></td>
<td>Retrieves data sent via URL parameters</td>
</tr>
<tr>
<td><code>$_POST</code></td>
<td>Retrieves data from form submissions sent via POST</td>
</tr>
<tr>
<td><code>$_REQUEST</code></td>
<td>Collects data from <code>$_GET</code>, <code>$_POST</code>, and <code>$_COOKIE</code></td>
</tr>
<tr>
<td><code>$_SERVER</code></td>
<td>Contains information about headers, paths, and script locations</td>
</tr>
<tr>
<td><code>$_FILES</code></td>
<td>Handles file uploads</td>
</tr>
<tr>
<td><code>$_COOKIE</code></td>
<td>Stores cookies sent from the client</td>
</tr>
<tr>
<td><code>$_SESSION</code></td>
<td>Stores session variables across multiple pages</td>
</tr>
<tr>
<td><code>$_ENV</code></td>
<td>Stores environment variables</td>
</tr>
<tr>
<td><code>$_GLOBALS</code></td>
<td>Accesses all global variables</td>
</tr>
</table>

---

## ✨ <span style="color:#17a2b8;">Examples</span>

### 🟢 <span style="color:#dc3545;">$_GET Example</span>
<p>Collecting data from a form using GET method:</p>

```php
<!-- index.php -->
<form method="GET" action="process.php">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>
```
```php
<!-- process.php -->
<?php
if (isset($_GET['name'])) {
    echo "Hello, " . htmlspecialchars($_GET['name']);
}
?>
```

---

### 🟠 <span style="color:#ffc107;">$_POST Example</span>
<p>Used for secure form submissions:</p>
```php
<!-- form.php -->
<form method="POST" action="process.php">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit" value="Login">
</form>
```
```php
<!-- process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    echo "Welcome, " . htmlspecialchars($username);
}
?>
```

---

### 🔵 <span style="color:#6610f2;">$_SERVER Example</span>
<p>Displays server-related details:</p>
```php
<?php
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "User IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'];
?>
```

---

### 🔴 <span style="color:#e83e8c;">$_SESSION Example</span>
<p>Used to store user session data:</p>
```php
<!-- start_session.php -->
<?php
session_start();
$_SESSION["user"] = "Kuldeep";
echo "Session set for user.";
?>
```
```php
<!-- get_session.php -->
<?php
session_start();
echo "User: " . $_SESSION["user"];
?>
```

---

### 🟣 <span style="color:#20c997;">$_COOKIE Example</span>
<p>Stores user preferences on the client-side:</p>
```php
<?php
setcookie("user", "Kuldeep", time() + 3600); // Expires in 1 hour
echo "Cookie set.";
?>
```
```php
<?php
if (isset($_COOKIE["user"])) {
    echo "Welcome back, " . $_COOKIE["user"];
}
?>
```

---

### 🟡 <span style="color:#fd7e14;">$_FILES Example</span>
<p>Handles file uploads:</p>
```php
<!-- upload.html -->
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload">
</form>
```
```php
<!-- upload.php -->
<?php
if (isset($_FILES["fileToUpload"])) {
    $file_name = $_FILES["fileToUpload"]["name"];
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $file_name);
    echo "File uploaded successfully.";
}
?>
```

---

## 📌 <span style="color:#007bff;">Conclusion</span>
Super global variables in PHP provide essential functionalities for handling user input, session management, cookies, file uploads, and server information. These variables help in making web applications interactive and secure.

---

## 📚 <span style="color:#17a2b8;">Resources</span>
- <a href="https://www.php.net/manual/en/language.variables.superglobals.php" target="_blank">PHP Manual</a>
- <a href="https://www.w3schools.com/php/php_forms.asp" target="_blank">PHP $_GET and $_POST</a>

---

## 🏷️ <span style="color:#28a745;">Tags</span>
<code>#PHP</code> <code>#SuperGlobalVariables</code> <code>#WebDevelopment</code> <code>#PHPForms</code> <code>#Cookies</code> <code>#Sessions</code> <code>#FileUpload</code> <code>#ServerInfo</code>
