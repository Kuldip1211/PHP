<h1 style="color: blue; text-align: center;">Advanced Usage of GET, POST & REQUEST in PHP 🚀</h1>

<h2 style="color: green;">1. Introduction to GET, POST & REQUEST 🔍</h2>
<p style="font-size: 16px;">
GET, POST, and REQUEST are PHP Super Global variables used to handle form data and request information between the client and server.
</p>

<h2 style="color: green;">2. Difference Between GET, POST & REQUEST 🔥</h2>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>Method</th>
        <th>Description</th>
        <th>Visibility</th>
        <th>Security</th>
        <th>Data Size</th>
    </tr>
    <tr>
        <td><b>GET</b> 🔍</td>
        <td>Retrieves data from the server using a URL</td>
        <td>Visible in the URL</td>
        <td>Less Secure ❌</td>
        <td>Limited (~2048 characters)</td>
    </tr>
    <tr>
        <td><b>POST</b> 📩</td>
        <td>Sends data to the server securely via the body</td>
        <td>Not Visible</td>
        <td>More Secure ✅</td>
        <td>Unlimited</td>
    </tr>
    <tr>
        <td><b>REQUEST</b> 🔄</td>
        <td>Handles both GET & POST data</td>
        <td>Depends on request method</td>
        <td>Less Secure ❌</td>
        <td>Depends on request method</td>
    </tr>
</table>

<h2 style="color: darkblue;">3. When to Use GET, POST, and REQUEST? 🤔</h2>
<ul>
    <li><b>Use GET:</b> When retrieving data that is not sensitive, like search queries or pagination.</li>
    <li><b>Use POST:</b> When submitting sensitive data like login credentials or file uploads.</li>
    <li><b>Use REQUEST:</b> When you want to handle both GET and POST without checking the method explicitly.</li>
</ul>

<h2 style="color: darkred;">4. Example Usage of GET, POST, and REQUEST 📖</h2>

<h3 style="color: darkblue;">🔹 Example 1: Using GET Method</h3>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;?php
if (isset($_GET['name'])) {
    echo "Hello, " . htmlspecialchars($_GET['name']);
}
?&gt;
&lt;a href="?name=Kuldeep"&gt;Click Here to Pass Name via GET&lt;/a&gt;
</pre>

<h3 style="color: darkblue;">🔹 Example 2: Using POST Method</h3>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;form method="POST"&gt;
    Name: &lt;input type="text" name="name"&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello, " . htmlspecialchars($_POST['name']);
}
?&gt;
</pre>

<h3 style="color: darkblue;">🔹 Example 3: Using REQUEST Method</h3>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;form method="POST"&gt;
    Name: &lt;input type="text" name="name"&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

&lt;?php
if (isset($_REQUEST['name'])) {
    echo "Hello, " . htmlspecialchars($_REQUEST['name']);
}
?&gt;
</pre>

<h2 style="color: darkred;">5. Advanced Usage of GET, POST & REQUEST 🏆</h2>

<h3 style="color: darkblue;">🔹 Handling Multiple Form Inputs 📌</h3>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;form method="POST"&gt;
    Name: &lt;input type="text" name="name"&gt; &lt;br&gt;
    Email: &lt;input type="email" name="email"&gt; &lt;br&gt;
    Age: &lt;input type="number" name="age"&gt; &lt;br&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name: " . htmlspecialchars($_POST['name']) . "&lt;br&gt;";
    echo "Email: " . htmlspecialchars($_POST['email']) . "&lt;br&gt;";
    echo "Age: " . htmlspecialchars($_POST['age']) . "&lt;br&gt;";
}
?&gt;
</pre>

<h3 style="color: darkblue;">🔹 Using GET for Pagination 📚</h3>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
echo "You are on page: " . htmlspecialchars($page);
?&gt;

&lt;a href="?page=1"&gt;Page 1&lt;/a&gt;
&lt;a href="?page=2"&gt;Page 2&lt;/a&gt;
</pre>

<h3 style="color: darkblue;">🔹 Secure Form Handling & Validation ✅</h3>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;form method="POST"&gt;
    Name: &lt;input type="text" name="name" required&gt; &lt;br&gt;
    Email: &lt;input type="email" name="email" required&gt; &lt;br&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    
    if (!$email) {
        echo "Invalid Email Address!";
    } else {
        echo "Hello, " . $name . " - Your email is " . $email;
    }
}
?&gt;
</pre>

<h2 style="color: darkred;">6. Best Practices for GET, POST & REQUEST 🏅</h2>
<ul>
    <li>✅ Always sanitize and validate user inputs to prevent XSS and SQL Injection.</li>
    <li>✅ Use POST for sensitive information like passwords.</li>
    <li>✅ Use GET only for non-sensitive data like search queries and pagination.</li>
    <li>✅ Avoid using REQUEST for critical data to prevent unwanted overrides.</li>
    <li>✅ Implement CSRF protection for POST requests.</li>
</ul>

<h2 style="color: darkblue;">7. Conclusion 🎯</h2>
<p style="font-size: 16px;">
Understanding GET, POST, and REQUEST is crucial for secure and efficient web applications. 
By following best practices, you can ensure data security and proper form handling in PHP.
</p>

<h2 style="color: red; text-align: center;">🚀 Happy Coding! 🚀</h2>

