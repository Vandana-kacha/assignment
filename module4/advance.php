<?php
echo "<b>1) What Is Object Oriented Programming?</b>  <br><br>";

echo "Object-oriented programming is creating objects that contain both data and functions. <br><br>";

echo "<b>2) What Are Properties Of Object Oriented Systems?</b>  <br><br>";

echo "Properties of Object Oriented Systems are Class, Object, Inheritance, Encapsulation, and Abstraction and Polymorphism <br><br>";

echo "<b>3) What Is Difference Between Class And Interface?</b> <br><br>";

echo "Classes <br> <hr> <br>";

echo "1. Class is a user-defined prototype required to create the object.<br>
2. 'class' Keyword is used<br>
3. Objects can be created in Class <br>
4. It can inherit another class <br>
5. It can be inherited by a class by using the keyword inheritance <br>
6. Allows you to contain constructors <br>
7. Classes can not supports multiple inheritance <br>
8. Variables and methods declared as public,protected,private 
<br><br> ";

echo "Interface <br> <hr> <br>";

echo "1. Allow you to specify what methods a class should implement.<br>
2. 'Interface' Keyword is used<br>
3. Objects can not be created in Interface <br>
4. It can not inherit another class <br>
5. It can be inherited by a class by using the keyword Implements <br>
6. it will not allows you to contain constructors <br>
7. Interface can supports multiple inheritance <br>
8. Variables and methods declared as public
<br><br> ";

echo "<b>4) What Is Overloading?</b> <br> <br>";

echo "More than one function can have same method signature but different number of arguments. Feature that allows a class to have more than one method having the same name. To load an excessive amount in or on something. <br><br>";

echo "<b>5) What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with Example</b> <br> <br>";

echo "A token that allows access to a constant, static property, or static method of a class or one of its parents <br> <br>";

class demo {
    public static $a=10;
    public static function func(){
        echo static::$a."<br>";
    }
}

class Child extends demo {
    public static $a=20;
}

demo::func();
echo "<br>";
Child::func();

echo "<br> <br>";

echo "<b>6) What are the differences between abstract classes and interfaces? </b> <br> <br>";

echo "abstract classes <br> <hr> <br>";

echo "1. An abstract class can contain both abstract and non-abstract methods.<br>
2. An abstract class can have all four; static, non-static and final, non-final variables.<br>
3. To declare abstract class abstract keywords are used. <br>
4. It supports multiple inheritance. <br>
5. The keyword 'extend' is used to extend an abstract class <br>
6. It has class members like private and protected, etc.
<br><br> ";

echo "interfaces <br> <hr> <br>";

echo "1. Interface contains only abstract methods.<br>
2. Only final and static variables are used.<br>
3. The interface can be declared with the interface keyword. <br>
4. It does not support multiple inheritance. <br>
5. The keyword implement is used to implement the interface. <br>
6. It has class members public by default.
<br><br> ";

echo "<b>7) Define Constructor and Destructor? </b> <br><br>";

echo "Constructor <br> <hr> <br>";

echo "a constructor allows you to initialize an object's properties upon the creation of the object. The constructor function starts with two underscores (__) and if we create a __construct() function, then PHP will automatically call this function when we create an object from a class.<br> <br>";

echo "Destructor <br> <hr> <br>";

echo "destroying the object or clean up resources .<br> <br>";

echo "<b>8) How to Load Classes in PHP ? </b> <br><br>";

echo " We can load classes using include,include_once,require,require_once function <br> <br>";

echo "<b>9) How to Call Parent Constructor ? </b> <br><br>";

echo " We can call Parent constructor using parent::__construct() function <br> <br>";

echo "<b>10) Are Parent Constructor Called Implicitly When Create An ObjectOf Class? </b> <br><br>";

echo " No. Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required<br> <br>";

echo "<b>11) What Happen, If Constructor Is Defined As Private Or Protected? </b> <br><br>";

echo " Only a static method will be able to instantiate the class. <br> <br>";

echo "<b>12) What are PHP Magic Methods/Functions? </b> <br><br>";

echo " There are 15 Magic methods/functions <br>
    __construct() <br>
    __destruct() <br>
    __call($fun, $arg) <br>
    __callStatic($fun, $arg) <br>
    __get($property) <br>
    __set($property, $value) <br>
    __isset($content) <br>
    __unset($content) <br>
    __sleep() <br>
    __wakeup() <br>
    __toString() <br>
    __invoke() <br>
    __set_state($array) <br>
    __clone() <br>
    __debugInfo()<br> <br>";

echo "<b>13) List them Write program for Static Keyword in PHP?</b> <br><br>";

class MyClass {
    public static $str = "Welcome";
    public static function display() {
        echo MyClass::$str;
    }
}

echo MyClass::$str;
echo "<br><br>";

echo "<b>14) Create multiple Traits and use it in to a single class? </b> <br><br>";

trait First {
    public function firstFunc() {
        echo 'Welcome ';
    }
}

trait Second {
    public function secondFunction() {
        echo 'Tops ';
    }
}

class Display1 {
    use First, Second;
    public function displayFunction() {
        echo '!';
    }
}

$o = new Display1();
$o->firstFunc();
$o->secondFunction();
$o->displayFunction();

echo " <br> <br>";

echo "<b>15) Write PHP Script of Object Iteration? </b> <br><br>";

echo "Objects to be defined so it is possible to iterate through a list of items. With foreach statement all visible properties will be used for the iteration <br> <br>";

$flexiple = array("Php", "tops", "laravel", "react", "developers");

foreach ($flexiple as $value) {
  echo "$value <br>";
}

echo "<br>";

echo "<b>16) Use of The &#36;this keyword </b> <br><br>";

echo " &#36;this is a reserved keyword in PHP that refers to the calling object. used to access static or class variables or methods. <br> <br>";

?>
