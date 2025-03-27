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

