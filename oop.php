```php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>
</head>

<body>

    <h1>OOP in PHP</h1>

    <!-- Class and Object -->
    <h2>Class and Object</h2>

    <?php

    class Car
    {
        public $Color;
        public $Model;
        public $Price;

        public function __construct($C, $M, $P)
        {
            $this->Color = $C;
            $this->Model = $M;
            $this->Price = $P;
        }
    }

    $mycar = new Car("Black", "BMW", "50000");

    echo "Color: " . $mycar->Color . "<br>";
    echo "Model: " . $mycar->Model . "<br>";
    echo "Price: " . $mycar->Price . "<br>";

    ?>


    <!-- Inheritance -->
    <h2>Inheritance</h2>

    <?php

    class Mango
    {
        public $color;
        public $price;

        public function __construct($color, $price)
        {
            $this->color = $color;
            $this->price = $price;
        }
    }

    class Fruits extends Mango
    {
        public $name;

        public function __construct($color, $price, $name)
        {
            parent::__construct($color, $price);
            $this->name = $name;
        }
    }

    $p = new Fruits("Yellow", 200, "Mango");

    echo "Color: " . $p->color . "<br>";
    echo "Price: " . $p->price . "<br>";
    echo "Name: " . $p->name . "<br>";

    ?>


    <!-- Overriding -->
    <h2>Overriding</h2>

    <?php

    class Base
    {
        public $name = "Awais";
        public $color = "Red";
    }

    class Derived extends Base
    {
        public $name;
        public $color;
    }

    $test = new Derived();

    $test->name = "Haseeb";
    $test->color = "Black";

    echo "Name: " . $test->name . "<br>";
    echo "Color: " . $test->color . "<br>";

    ?>

    <p>
        In the above example, the values of <strong>name</strong> and
        <strong>color</strong> are changed in the derived class.
        We can override variables, methods, and functions in the child class.
    </p>


    <!-- Abstract Class -->
    <h2>Abstract Class</h2>

    <?php

    abstract class ParentClass
    {
        public $name;
        public $rollno;

        public function __construct($n, $r)
        {
            $this->name = $n;
            $this->rollno = $r;
        }

        abstract public function show();
    }

    class Child extends ParentClass
    {
        public function show()
        {
            echo "Name: " . $this->name . "<br>";
            echo "Roll No: " . $this->rollno . "<br>";
        }
    }

    $p1 = new Child("Haseeb Ur Rehman", "BSIT-E1-23-23");
    $p1->show();

    ?>


    <!-- Interface -->
    <h2>Interface</h2>

    <?php

    interface Parent1
    {
        public function calc($a, $b);
    }

    interface Parent2
    {
        public function sub($c, $d);
    }

    class Child1 implements Parent1, Parent2
    {
        public function calc($a, $b)
        {
            echo "Addition of Two Numbers: " . ($a + $b) . "<br>";
        }

        public function sub($c, $d)
        {
            echo "Subtraction of Two Numbers: " . ($c - $d) . "<br>";
        }
    }

    $obj = new Child1();

    $obj->calc(10, 5);
    $obj->sub(10, 5);

    ?>


    <!-- Encapsulation -->
    <h2>Encapsulation</h2>

    <?php

    class Student
    {
        private $name;

        public function setName($n)
        {
            $this->name = $n;
        }

        public function getName()
        {
            return $this->name;
        }
    }

    $s = new Student();

    $s->setName("Ali");

    echo $s->getName();

    ?>


    <!-- Polymorphism -->
    <h2>Polymorphism</h2>

    <?php

    class Animal
    {
        public function sound()
        {
            echo "Animal makes sound<br>";
        }
    }

    class Dog extends Animal
    {
        public function sound()
        {
            echo "Dog barks<br>";
        }
    }

    class Cat extends Animal
    {
        public function sound()
        {
            echo "Cat meows<br>";
        }
    }

    $d = new Dog();
    $c = new Cat();

    $d->sound();
    $c->sound();

    ?>

</body>

</html>

