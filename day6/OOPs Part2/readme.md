

  <h1>🚀 PHP OOP Concepts - Beginner to Advanced</h1>
  <p>👋 Hey there! This tutorial will walk you through all major Object-Oriented Programming concepts in PHP using real-life relatable examples and emojis for better understanding.</p>

  <!-- Access Modifiers -->
  <div class="section">
    <h2>🔐 4. Access Modifiers (Visibility)</h2>

    <h3>👉 public / protected / private</h3>
    <ul>
      <li><strong>🔓 public</strong>: Accessible from anywhere (e.g., your name).</li>
      <li><strong>🛡️ protected</strong>: Accessible within the class and subclasses (e.g., your company salary).</li>
      <li><strong>🔒 private</strong>: Accessible only inside the class (e.g., ATM PIN).</li>
    </ul>

    <code>
class Person {
    public $name = "Kuldeep";
    protected $salary = 50000;
    private $atmPin = 1234;

    public function getAtmPin() {
        return $this->atmPin;
    }
}

$person = new Person();
echo $person->name;         // ✅ Public
echo $person->getAtmPin();  // ✅ Private (via method)
    </code>

    <h3>✅ Best Practices</h3>
    <ul>
      <li>Keep properties <code>private</code> or <code>protected</code></li>
      <li>Use <code>getters</code> and <code>setters</code> for safe access</li>
    </ul>

    <h3>📦 Encapsulation (Real-Life Capsule)</h3>
    <p>Wraps data & logic together. Like a medicine capsule: you don't know how it works, just take it.</p>

    <code>
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}
    </code>
  </div>

  <!-- Inheritance -->
  <div class="section">
    <h2>🧬 5. Inheritance</h2>

    <h3>🚗 Real-life Example: Vehicle → Car</h3>
    <code>
class Vehicle {
    public function move() {
        echo "Moving...";
    }
}

class Car extends Vehicle {
    public function honk() {
        echo "Beep!";
    }
}

$car = new Car();
$car->move();  // Inherited
$car->honk();  // Own method
    </code>

    <h3>📝 Overriding Methods</h3>
    <p>You can rewrite parent methods in child class</p>

    <code>
class Animal {
    public function sound() {
        echo "Some sound";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Bark!";
    }
}
    </code>

    <h3>📤 The <code>parent</code> Keyword</h3>
    <code>
class ParentClass {
    public function greet() {
        echo "Hi from parent!";
    }
}

class ChildClass extends ParentClass {
    public function greet() {
        parent::greet();
        echo " And child says hello!";
    }
}
    </code>

    <h3>🔗 Inheritance Chain</h3>
    <code>
class LivingThing {
    public function breathe() {
        echo "Breathing...";
    }
}

class Animal extends LivingThing {}
class Dog extends Animal {}

$dog = new Dog();
$dog->breathe(); // ✅ Grandparent method
    </code>

    <h3>🚫 <code>final</code> Keyword</h3>
    <p>Stops class or method from being overridden or extended.</p>
    <code>
final class SecureArea {
    public function enter() {
        echo "Authorized only!";
    }
}

// ❌ Cannot extend
// class Hacker extends SecureArea {}
    </code>
  </div>

  <!-- Abstract Classes -->
  <div class="section">
    <h2>📐 6. Abstract Classes and Methods</h2>

    <h3>🧱 Abstract Class</h3>
    <p>Base class with incomplete (abstract) methods. Cannot be instantiated directly.</p>

    <code>
abstract class Shape {
    abstract public function area();
}

class Circle extends Shape {
    private $radius;
    public function __construct($r) {
        $this->radius = $r;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo $circle->area();
    </code>

    <h3>🕐 When to Use?</h3>
    <ul>
      <li>When you want subclasses to provide specific implementations.</li>
      <li>To enforce common structure across related classes.</li>
    </ul>

    <h3>⚖️ Abstract Class vs Interface</h3>

    <ul>
      <li>📦 Abstract class = can have properties + methods + abstract rules</li>
      <li>🧾 Interface = only rules (100% abstract)</li>
    </ul>

    <h4>🧾 Interface Example</h4>
    <code>
interface Printer {
    public function print();
}

class Document implements Printer {
    public function print() {
        echo "Printing document...";
    }
}
    </code>
  </div>

  <footer>
    <hr>
    <p>🧠 Practice makes perfect! Made by <strong>Kuldeep</strong> with ❤️ to help understand PHP OOP easily.</p>
  </footer>

