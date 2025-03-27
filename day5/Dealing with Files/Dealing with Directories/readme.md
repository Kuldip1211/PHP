<h1 style="color: blue; text-align: center;">📂 Directory Handling & Functions in PHP 🚀</h1>

<h2 style="color: green;">📌 Introduction</h2>
<p style="font-size: 16px;">Directories in PHP are used to <b>store and organize files</b>. PHP provides built-in functions to <b>create, read, delete, rename, and manipulate directories</b>. This guide explains these functions with examples.</p>

<hr>

<h2 style="color: green;">🏷️ 1. Directory Functions in PHP</h2>

<h3 style="color: darkblue;">📂 Directory Creation & Deletion</h3>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>🏷️ Function</th>
        <th>📝 Description</th>
    </tr>
    <tr>
        <td><code>mkdir($dir, $mode, $recursive)</code></td>
        <td>Creates a new directory.</td>
    </tr>
    <tr>
        <td><code>rmdir($dir)</code></td>
        <td>Deletes an empty directory.</td>
    </tr>
</table>

<h3 style="color: darkblue;">📖 Reading Directory Contents</h3>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>📄 Function</th>
        <th>📝 Description</th>
    </tr>
    <tr>
        <td><code>opendir($dir)</code></td>
        <td>Opens a directory handle.</td>
    </tr>
    <tr>
        <td><code>readdir($handle)</code></td>
        <td>Reads entries (files/folders) inside a directory.</td>
    </tr>
    <tr>
        <td><code>scandir($dir)</code></td>
        <td>Returns an array of files in the directory.</td>
    </tr>
</table>

<h3 style="color: darkblue;">🔄 Manipulating Directories</h3>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>🔄 Function</th>
        <th>📝 Description</th>
    </tr>
    <tr>
        <td><code>chdir($dir)</code></td>
        <td>Changes the current working directory.</td>
    </tr>
    <tr>
        <td><code>getcwd()</code></td>
        <td>Returns the current working directory.</td>
    </tr>
    <tr>
        <td><code>rename($oldDir, $newDir)</code></td>
        <td>Renames a directory.</td>
    </tr>
</table>

<h3 style="color: darkblue;">🚀 Checking Directory Status</h3>
<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; text-align: left; width: 100%;">
    <tr style="background-color: lightgray;">
        <th>✅ Function</th>
        <th>📝 Description</th>
    </tr>
    <tr>
        <td><code>is_dir($dir)</code></td>
        <td>Checks if a path is a directory.</td>
    </tr>
    <tr>
        <td><code>file_exists($dir)</code></td>
        <td>Checks if a file or directory exists.</td>
    </tr>
</table>

<hr>

<h2 style="color: green;">🎯 2. Example PHP Code for Directory Handling</h2>

<h3 style="color: darkred;">📂 Single PHP File Demonstration</h3>

<pre style="background-color: #f4f4f4; padding: 10px; border-left: 5px solid gray;">
&lt;?php
// Set directory name
$directory = "testDir";

// 1️⃣ CREATE A DIRECTORY
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
    echo "&lt;b&gt;Directory Created:&lt;/b&gt; $directory &lt;br&gt;";
} else {
    echo "&lt;b&gt;Directory Already Exists:&lt;/b&gt; $directory &lt;br&gt;";
}

// 2️⃣ LIST FILES IN A DIRECTORY
echo "&lt;b&gt;Files in Directory:&lt;/b&gt; &lt;br&gt;";
$files = scandir($directory);
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "📄 $file &lt;br&gt;";
    }
}

// 3️⃣ RENAME DIRECTORY
$newDirectory = "renamedDir";
if (file_exists($directory)) {
    rename($directory, $newDirectory);
    echo "&lt;b&gt;Directory Renamed To:&lt;/b&gt; $newDirectory &lt;br&gt;";
}

// 4️⃣ DELETE DIRECTORY
if (file_exists($newDirectory)) {
    rmdir($newDirectory);
    echo "&lt;b&gt;Directory Deleted:&lt;/b&gt; $newDirectory &lt;br&gt;";
}
?&gt;
</pre>

<h3 style="color: darkred;">✨ Expected Output:</h3>
<ul>
    <li>✅ Directory Created: testDir</li>
    <li>📂 Files in Directory: (Lists files inside the directory)</li>
    <li>✏️ Directory Renamed To: renamedDir</li>
    <li>❌ Directory Deleted: renamedDir</li>
</ul>

<hr>

<h2 style="color: green;">🎯 3. Additional Notes</h2>
<ul>
    <li>Ensure you have the correct file permissions to create, rename, and delete directories.</li>
    <li>Use <code>file_exists()</code> before performing actions to avoid errors.</li>
    <li>Directories cannot be deleted if they contain files—use <code>unlink()</code> to remove files first.</li>
</ul>
