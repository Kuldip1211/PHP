<h1 style="color: blue; text-align: center;">HTTP Headers in PHP - Explanation and Examples 🚀</h1>

<h2 style="color: green;">1. What are HTTP Headers? 🌍</h2>
<p style="font-size: 16px;">
HTTP headers allow the client and server to pass additional information with the request or response. They help in authentication, redirection, content control, caching, and much more.
</p>

<h2 style="color: green;">2. Types of HTTP Headers 🔥</h2>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>Header Type</th>
        <th>Description</th>
        <th>Example</th>
    </tr>
    <tr>
        <td>General Headers</td>
        <td>Headers applied to both request and response</td>
        <td><code>Cache-Control: no-cache</code></td>
    </tr>
    <tr>
        <td>Request Headers</td>
        <td>Headers sent by the client to the server</td>
        <td><code>User-Agent: Mozilla/5.0</code></td>
    </tr>
    <tr>
        <td>Response Headers</td>
        <td>Headers sent by the server to the client</td>
        <td><code>Content-Type: text/html</code></td>
    </tr>
    <tr>
        <td>Entity Headers</td>
        <td>Provide information about the body of the resource</td>
        <td><code>Content-Length: 1234</code></td>
    </tr>
</table>

<h2 style="color: darkblue;">3. Common HTTP Headers Used in PHP 🎯</h2>
<ul>
    <li><b>Redirect:</b> <code>header("Location: https://example.com");</code></li>
    <li><b>Content-Type:</b> <code>header("Content-Type: application/json");</code></li>
    <li><b>Prevent Caching:</b> <code>header("Cache-Control: no-store, no-cache");</code></li>
    <li><b>Custom Header:</b> <code>header("X-Custom-Header: MyValue");</code></li>
    <li><b>HTTP Status Code:</b> <code>http_response_code(404);</code></li>
</ul>

<h2 style="color: darkred;">4. Example Usage of HTTP Headers in PHP 📖</h2>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;?php
// Setting a custom header
header("X-Custom-Header: MyHeaderValue");

// Redirecting user
header("Location: https://example.com");
exit();

// Sending a JSON response
header("Content-Type: application/json");
echo json_encode(["message" => "Hello, World!"]);
exit();

// Preventing caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Sending HTTP status code
http_response_code(404);
?&gt;
</pre>

<h2 style="color: darkred;">5. Example PHP Script 🎬</h2>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;?php
if (isset($_GET['redirect'])) {
    header("Location: https://www.example.com");
    exit();
}

if (isset($_GET['json'])) {
    header("Content-Type: application/json");
    echo json_encode(["message" => "This is a JSON response"]);
    exit();
}

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (isset($_GET['error'])) {
    http_response_code(404);
    echo "&lt;h2&gt;404 Not Found&lt;/h2&gt;&lt;p&gt;The requested resource was not found.&lt;/p&gt;";
    exit();
}
?&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;PHP HTTP Headers Example&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;PHP HTTP Headers Examples 🚀&lt;/h2&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="?redirect=true"&gt;Click here for Redirection&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="?json=true"&gt;Click here for JSON Response&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="?error=true"&gt;Click here to Generate 404 Error&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<h2 style="color: darkblue;">6. How to Test This? 🧪</h2>
<ol>
    <li>Save the PHP file as <b>http_headers.php</b></li>
    <li>Run it in a local server (e.g., XAMPP or WAMP)</li>
    <li>Click the links to test different HTTP header behaviors</li>
</ol>

<h2 style="color: darkred;">7. Conclusion 🎯</h2>
<p style="font-size: 16px;">
HTTP Headers in PHP are essential for handling security, redirection, caching, and content-type responses.
They allow better control over web communication and data transfer between the client and server.
</p>

