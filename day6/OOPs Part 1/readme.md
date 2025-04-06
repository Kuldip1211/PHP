<h1>📘 Introduction to Object-Oriented Programming (OOP) in PHP</h1>

<h2>1. What is Object-Oriented Programming?</h2>
<p>
Object-Oriented Programming (OOP) is a programming paradigm that uses <strong>objects</strong> to design and structure code. Objects combine <strong>data</strong> and <strong>behavior</strong>, making code modular, reusable, and easier to maintain.
</p>

<hr/>

<h2>🚀 Benefits of OOP over Procedural Programming</h2>
<ul>
  <li>✅ Better code organization</li>
  <li>🔄 Reusability through inheritance</li>
  <li>🔧 Easy to maintain and debug</li>
  <li>🧩 Supports abstraction and encapsulation</li>
  <li>🏗 More scalable for large applications</li>
</ul>

<hr/>

<h2>🧠 Basic OOP Terminology</h2>
<ul>
  <li><strong>Class</strong>: A blueprint for objects</li>
  <li><strong>Object</strong>: An instance of a class</li>
  <li><strong>Property</strong>: Variable inside a class</li>
  <li><strong>Method</strong>: Function inside a class</li>
  <li><strong>Constructor</strong>: Initializes the object</li>
  <li><strong>Destructor</strong>: Cleans up before object is destroyed</li>
</ul>

<hr/>

<h2>🐘 PHP's OOP Implementation</h2>
<p>PHP supports full-fledged OOP since PHP 5, and introduced powerful features like constructor property promotion in PHP 8.</p>

<hr/>

<h2>2. 📦 Classes and Objects</h2>

<h3>🔧 Class Definition Syntax</h3>
<pre><code>
class Car {
    public $brand;
    public $color;

    public function drive() {
        echo "The car is driving.";
    }
}
</code></pre>

<h3>🆕 Creating Objects (Instantiation)</h3>
<pre><code>
$car1 = new Car();
$car1->brand = "Toyota";
$car1->color = "Red";

echo $car1->brand; // Output: Toyota
</code></pre>

<h3>🏷 Properties (Member Variables)</h3>
<pre><code>
class Person {
    public $name;
    public $age;
}
</code></pre>

<h3>⚙ Methods (Member Functions)</h3>
<pre><code>
class Person {
    public $name;

    public function greet() {
        echo "Hello, my name is " . $this->name;
    }
}
</code></pre>

<h3>🔁 The <code>$this</code> Keyword</h3>
<pre><code>
$this->name; // Refers to the 'name' property of the current object
</code></pre>

<h3>🧱 Class Constants</h3>
<pre><code>
class MathConstants {
    const PI = 3.14159;
}

echo MathConstants::PI; // Output: 3.14159
</code></pre>

<hr/>

<h2>3. 🏗 Constructors and Destructors</h2>

<h3>🔨 The __construct() Method</h3>
<pre><code>
class User {
    public $username;

    public function __construct($name) {
        $this->username = $name;
    }
}

$user1 = new User("Kuldeep");
echo $user1->username; // Output: Kuldeep
</code></pre>

<h3>🧪 Parameterized Constructors</h3>
<pre><code>
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}
</code></pre>

<h3>⚡ Constructor Property Promotion (PHP 8+)</h3>
<pre><code>
class Book {
    public function __construct(
        public string $title,
        public string $author
    ) {}
}

$book = new Book("1984", "George Orwell");
echo $book->title; // Output: 1984
</code></pre>

<h3>🗑 The __destruct() Method</h3>
<pre><code>
class Logger {
    public function __destruct() {
        echo "Object destroyed.";
    }
}

$log = new Logger();
// Output at the end of script: Object destroyed.
</code></pre>

<h3>🧬 Object Initialization Patterns</h3>
<pre><code>
class Order {
    public $id;
    public $amount;

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }
}

$order = (new Order())->setId(101)->setAmount(500);
</code></pre>

<hr/>

<h2>✅ Summary</h2>
<p>In this guide, you've learned the fundamentals of OOP in PHP, including:</p>
<ul>
  <li>Class & Object basics</li>
  <li>Properties and methods</li>
  <li>Constructors and destructors</li>
  <li>PHP 8's constructor property promotion</li>
</ul>

<p>🧠 <strong>Pro Tip:</strong> Try building a class-based mini project (e.g., Inventory Manager, Task Tracker, or Library App) to put these skills into practice.</p>
