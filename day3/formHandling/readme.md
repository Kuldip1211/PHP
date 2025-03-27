<h1 style="color: blue; text-align: center;">PHP Superglobals - Explanation and Examples 🚀</h1>

<h2 style="color: green;">1. Global Scope 🌍</h2>
<p style="font-size: 16px;">Global variables in PHP are defined outside functions and cannot be accessed inside functions unless using <code>GLOBALS</code>.</p>

<h2 style="color: green;">2. $_GET 🔍</h2>
<p style="font-size: 16px;">The <code>$_GET</code> superglobal is used to collect data from the URL query string.</p>
<p><b>Example:</b> <code>yourfile.php?name=John</code></p>

<h2 style="color: green;">3. $_POST ✉️</h2>
<p style="font-size: 16px;">The <code>$_POST</code> superglobal is used to collect data from an HTML form with method="POST".</p>

<h2 style="color: green;">4. $_SERVER 🖥️</h2>
<p style="font-size: 16px;">The <code>$_SERVER</code> superglobal provides information about the server and execution environment.</p>

<h2 style="color: green;">5. $_SESSION 🔐</h2>
<p style="font-size: 16px;">The <code>$_SESSION</code> superglobal is used to store user data across multiple pages.</p>

<h2 style="color: green;">6. $_COOKIE 🍪</h2>
<p style="font-size: 16px;">The <code>$_COOKIE</code> superglobal is used to store small amounts of data on the client side.</p>

<h2 style="color: green;">7. $_FILES 📂</h2>
<p style="font-size: 16px;">The <code>$_FILES</code> superglobal is used to handle file uploads.</p>

<h2 style="color: darkred;">Difference Between GET and POST ⚖️</h2>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>Feature</th>
        <th>GET Method 🔍</th>
        <th>POST Method ✉️</th>
    </tr>
    <tr>
        <td>Visibility</td>
        <td>Data is visible in URL</td>
        <td>Data is hidden from URL</td>
    </tr>
    <tr>
        <td>Security</td>
        <td>Less secure</td>
        <td>More secure</td>
    </tr>
    <tr>
        <td>Data Size</td>
        <td>Limited (depends on URL length)</td>
        <td>Unlimited</td>
    </tr>
    <tr>
        <td>Use Case</td>
        <td>For retrieving data (e.g., search queries)</td>
        <td>For submitting sensitive data (e.g., passwords)</td>
    </tr>
</table>

<h2 style="color: darkred;">Example Forms 📝</h2>
<h3 style="color: darkblue;">GET Form 🔍</h3>
<form method="GET" style="margin-bottom: 20px;">
    <input type="text" name="name" placeholder="Enter your name" style="padding: 5px; margin-right: 10px;">
    <input type="submit" value="Submit via GET" style="padding: 5px; background-color: lightblue;">
</form>

<h3 style="color: darkblue;">POST Form ✉️</h3>
<form method="POST" style="margin-bottom: 20px;">
    <input type="text" name="username" placeholder="Enter Username" style="padding: 5px; margin-right: 10px;">
    <input type="password" name="password" placeholder="Enter Password" style="padding: 5px; margin-right: 10px;">
    <input type="submit" value="Submit via POST" style="padding: 5px; background-color: lightblue;">
</form>

<h3 style="color: darkblue;">File Upload Form 📂</h3>
<form method="POST" enctype="multipart/form-data">
    <p style="font-size: 16px;">Select file to upload:</p>
    <input type="file" name="fileToUpload" style="padding: 5px; margin-bottom: 10px;">
    <input type="submit" value="Upload" style="padding: 5px; background-color: lightgreen;">
</form>