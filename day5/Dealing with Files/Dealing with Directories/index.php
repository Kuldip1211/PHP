<?php
echo "<h1 style='color: blue; text-align: center;'>📂 PHP Directory Handling - Example 🚀</h1>";

// Directory name
$directory = "exampleDir";

// 1️⃣ CREATE A DIRECTORY
if (!file_exists($directory)) {
    mkdir($directory, 0777, true); // Create directory with full permissions
    echo "<p style='color: green;'>✅ Directory Created: <b>$directory</b></p>";
} else {
    echo "<p style='color: orange;'>⚠️ Directory Already Exists: <b>$directory</b></p>";
}

// 2️⃣ LIST FILES IN A DIRECTORY
echo "<h2 style='color: darkblue;'>📂 Listing Files in Directory:</h2>";
$files = scandir($directory);
echo "<ul>";
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li>📄 $file</li>";
    }
}
echo "</ul>";

// 3️⃣ RENAME DIRECTORY
$newDirectory = "renamedExampleDir";
if (file_exists($directory)) {
    rename($directory, $newDirectory);
    echo "<p style='color: green;'>✏️ Directory Renamed To: <b>$newDirectory</b></p>";
} else {
    echo "<p style='color: red;'>❌ Directory Not Found for Renaming.</p>";
}

// 4️⃣ DELETE DIRECTORY
if (file_exists($newDirectory)) {
    rmdir($newDirectory);
    echo "<p style='color: red;'>🗑️ Directory Deleted: <b>$newDirectory</b></p>";
} else {
    echo "<p style='color: red;'>❌ Directory Not Found for Deletion.</p>";
}

?>
