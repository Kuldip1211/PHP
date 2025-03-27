<?php
// Setting Custom Header
header("X-Custom-Header: MyHeaderValue");

// Redirect Example
if (isset($_GET['redirect'])) {
    header("Location: https://www.example.com");
    exit();
}

// Content Type Example
if (isset($_GET['json'])) {
    header("Content-Type: application/json");
    echo json_encode(["message" => "This is a JSON response"]);
    exit();
}

// Prevent Caching Example
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Sending HTTP Status Code
if (isset($_GET['error'])) {
    http_response_code(404);
    echo "<h2>404 Not Found</h2><p>The requested resource was not found.</p>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP HTTP Headers Example</title>
</head>
<body>

    <h2>PHP HTTP Headers Examples 🚀</h2>

    <ul>
        <li><a href="?redirect=true">Click here for Redirection</a></li>
        <li><a href="?json=true">Click here for JSON Response</a></li>
        <li><a href="?error=true">Click here to Generate 404 Error</a></li>
    </ul>

</body>
</html>
