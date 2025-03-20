<h1 style="text-align:center; color:#2c3e50;">🚀 PHP Data Types - README</h1>

<h2 style="border-bottom: 2px solid #3498db;">📌 Overview</h2>
<p style="font-size: 18px;">This document provides an explanation of different data types in PHP.</p>

<h2 style="border-bottom: 2px solid #3498db;">📝 Data Types Covered</h2>

<h3 style="color:#e74c3c;">1️⃣ String (📝 Text Data)</h3>
<p>A string is a sequence of characters enclosed in quotes.</p>
<div style="background:#ecf0f1; padding:10px; border-radius:5px;">
<pre><code>$stringVar = "Hello, PHP!";
echo "String: " . $stringVar;</code></pre>
</div>
✅ <b>Example Output:</b>
<pre style="background:#d1f2eb; padding:10px; border-radius:5px;">String: Hello, PHP!</pre>

<h3 style="color:#e74c3c;">2️⃣ Integer (🔢 Whole Numbers)</h3>
<p>An integer is a whole number, positive or negative, without decimals.</p>
<div style="background:#ecf0f1; padding:10px; border-radius:5px;">
<pre><code>$intVar = 100;
echo "Integer: " . $intVar;</code></pre>
</div>
✅ <b>Example Output:</b>
<pre style="background:#d1f2eb; padding:10px; border-radius:5px;">Integer: 100</pre>

<h3 style="color:#e74c3c;">3️⃣ Float (💧 Decimal Numbers)</h3>
<p>A float is a number with a decimal point.</p>
<div style="background:#ecf0f1; padding:10px; border-radius:5px;">
<pre><code>$floatVar = 10.5;
echo "Float: " . $floatVar;</code></pre>
</div>
✅ <b>Example Output:</b>
<pre style="background:#d1f2eb; padding:10px; border-radius:5px;">Float: 10.5</pre>

<h3 style="color:#e74c3c;">4️⃣ Boolean (✅ True/False)</h3>
<p>A boolean represents either <code>true</code> or <code>false</code>.</p>
<div style="background:#ecf0f1; padding:10px; border-radius:5px;">
<pre><code>$boolVar = true;
echo "Boolean: " . ($boolVar ? 'true' : 'false');</code></pre>
</div>
✅ <b>Example Output:</b>
<pre style="background:#d1f2eb; padding:10px; border-radius:5px;">Boolean: true</pre>

<h3 style="color:#e74c3c;">5️⃣ Array (📦 Collection of Values)</h3>
<p>An array holds multiple values in a single variable.</p>
<div style="background:#ecf0f1; padding:10px; border-radius:5px;">
<pre><code>$arrayVar = array("Apple", "Banana", "Cherry");
echo "Array: " . implode(", ", $arrayVar);</code></pre>
</div>
✅ <b>Example Output:</b>
<pre style="background:#d1f2eb; padding:10px; border-radius:5px;">Array: Apple, Banana, Cherry</pre>

<h3 style="color:#e74c3c;">6️⃣ Object (🚗 Custom Data Structures)</h3>
<p>An object is an instance of a class that can hold both data and methods.</p>
<div style="background:#ecf0f1; padding:10px; border-radius:5px;">
<pre><code>class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
}
$carVar = new Car("Toyota");
echo "Object: " . $carVar->brand;</code></pre>
</div>
✅ <b>Example Output:</b>
<pre style="background:#d1f2eb; padding:10px; border-radius:5px;">Object: Toyota</pre>

<h2 style="border-bottom: 2px solid #3498db;">🏃‍♂️ How to Run the Script</h2>
<ul>
    <li>Ensure you have PHP installed.</li>
    <li>Save the script as <code>data_types.php</code>.</li>
    <li>Run it using the following command:</li>
    <div style="background:#ecf0f1; padding:10px; border-radius:5px;">
    <pre><code>php data_types.php</code></pre>
    </div>
    <li>Observe the output displaying different data types.</li>
</ul>

<h2 style="border-bottom: 2px solid #3498db;">🎯 Conclusion</h2>
<p style="font-size: 18px;">This document serves as an introduction to PHP data types and how to use them. Understanding these data types is fundamental to programming in PHP. 💡</p>
