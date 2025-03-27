<h1 style="color: blue; text-align: center;">PHP Variable Handling & Constants - Explanation and Examples 🚀</h1>

<h2 style="color: green;">1. PHP Variables 📝</h2>
<p style="font-size: 16px;">Variables in PHP are used to store data. They start with a <code>$</code> sign and do not need explicit type declaration.</p>
<p><b>Example:</b> <code>$name = "John";</code></p>

<h2 style="color: green;">2. Variable Scope 🌍</h2>
<ul>
    <li><b>Global:</b> Accessible outside functions.</li>
    <li><b>Local:</b> Declared inside functions and not accessible outside.</li>
    <li><b>Static:</b> Retains value between function calls.</li>
</ul>

<h2 style="color: green;">3. Constants 🔥</h2>
<p style="font-size: 16px;">Constants in PHP are defined using <code>define()</code> or <code>const</code> keyword and cannot be changed.</p>
<p><b>Example:</b> <code>define("SITE_NAME", "MyWebsite");</code></p>

<h2 style="color: darkred;">Example Table 📖</h2>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>Feature</th>
        <th>Variable 📝</th>
        <th>Constant 🔥</th>
    </tr>
    <tr>
        <td>Declaration</td>
        <td><code>$var = "Hello";</code></td>
        <td><code>define("CONST", "Hello");</code></td>
    </tr>
    <tr>
        <td>Changeable</td>
        <td>Yes</td>
        <td>No</td>
    </tr>
    <tr>
        <td>Scope</td>
        <td>Local or Global</td>
        <td>Global</td>
    </tr>
</table>

<h2 style="color: darkblue;">PHP Constants Example ✨</h2>
<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;?php
    define("SITE", "My Website");
    echo "Website Name: " . SITE . "&lt;br&gt;";
    
    // Variable Example
    $username = "Kuldeep";
    echo "Username: " . $username . "&lt;br&gt;";

    // Global and Local Scope
    $globalVar = "I am Global";
    function testScope() {
        global $globalVar;
        echo "Inside Function: " . $globalVar . "&lt;br&gt;";
    }
    testScope();
?&gt;
</pre>

<h2 style="color: darkred;">4. PHP Form Input Attributes and Control Types ✨</h2>
<p style="font-size: 16px;">HTML forms use various input attributes to control user input and validation.</p>

<h3 style="color: darkblue;">Common Input Attributes 📌</h3>
<ul>
    <li><b>type</b> - Specifies input type (text, password, email, etc.).</li>
    <li><b>name</b> - Defines the input field name.</li>
    <li><b>value</b> - Default value for the input field.</li>
    <li><b>required</b> - Makes input field mandatory.</li>
    <li><b>placeholder</b> - Displays hint text inside input.</li>
</ul>

<h3 style="color: darkblue;">Input Control Types 🎛️</h3>
<ul>
    <li><b>Text Input:</b> <code>&lt;input type="text" name="username"&gt;</code></li>
    <li><b>Password:</b> <code>&lt;input type="password" name="password"&gt;</code></li>
    <li><b>Email:</b> <code>&lt;input type="email" name="email"&gt;</code></li>
    <li><b>Number:</b> <code>&lt;input type="number" name="age"&gt;</code></li>
    <li><b>Checkbox:</b> <code>&lt;input type="checkbox" name="subscribe"&gt;</code></li>
    <li><b>Radio:</b> <code>&lt;input type="radio" name="gender" value="male"&gt; Male</code></li>
    <li><b>Submit:</b> <code>&lt;input type="submit" value="Submit"&gt;</code></li>
</ul>

<h2 style="color: darkred;">Example Form 📝</h2>
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Enter Username" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    
    <label for="age">Age:</label>
    <input type="number" name="age" placeholder="Enter Age" required><br><br>
    
    <input type="submit" value="Submit">
</form>
