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
    __call(&#36;fun, &#36;arg) <br>
    __callStatic(&#36;fun, &#36;arg) <br>
    __get(&#36;property) <br>
    __set(&#36;property, &#36;value) <br>
    __isset(&#36;content) <br>
    __unset(&#36;content) <br>
    __sleep() <br>
    __wakeup() <br>
    __toString() <br>
    __invoke() <br>
    __set_state(&#36;array) <br>
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

echo "<b>17) What is jQuery</b> <br><br>";

echo "jQuery is a lightweight,small,feature-rich javascript library <br><br>";

echo "<b>18) How are JavaScript and jQuery different?</b> <br><br>";

echo "JavaScript is a programming language while jQuery is a library that consists of JavaScript code <br><br>";

echo "<b>19) Which is the starting point of code execution in jQuery?</b> <br><br>";

echo " &#36;(document).ready(function({....})); <br> <br>";

echo "<b>20) Document Load Vs Window. Load() jQuery</b> <br><br>";

echo "&#36;(window).load() <br><hr><br>";

echo "The code which gets included inside &#36;( window ).on( 'load', function() { ... }) runs only once the entire page is ready (not only DOM). <br><br>";

echo "&#36;(document).ready() <br><hr><br>";

echo "The ready() method is used to make a function available after the document is loaded. Whatever code you write inside the $( document ).ready() method will run once the page DOM is ready to execute JavaScript code. <br><br>";

echo "<b>21) What is the difference between prop and attr?</b> <br><br>";

echo " attr <br><hr><br> changes attributes for that HTML tag. <br><br>";

echo " prop <br><hr><br> changes properties for that HTML tag as per the DOM tree. <br><br>";

echo "<b>22) Explain Difference Between JQuery And JavaScript?</b> <br><br>";

echo "Javascript <br><hr><br>";

echo "1. JavaScript is an independent language and can exist on its own. <br>
2. JavaScript uses more lines of code as we have to write our own code <br> 
3. JavaScript code is written inside the script tag in a HTML page script tag <br> 
4. All these can be done in JavaScript but we may have to write many lines of code. <br> 
5. Being a language, it is heavier than jQuery <br> 
6. JavaScript is verbose as one has to write many lines of code for a functionality <br> <br>";

echo "jQuery <br><hr><br>";

echo "1. jQuery is a JavaScript library. It would not have been invented had JavaScript was not there. <br> 
2. It is a light-weight JavaScript library. It has only the DOM <br> 
3. We just have to import the library and use the relevant function/method of the library in our code. <br> 
4. In jQuery, we can add animation effects easily with fewer lines of code. <br> 
5. jQuery has to be converted into JavaScript to make it run in a browser. <br> 
6. Being a library, it is lightweight. It has a minified version of its code which makes it light-weight. <br><br>";

echo "<b>23) How We Can Select The Specified li Element From The ListOf li Elements In ul ?</b> <br><br>";

echo "&#36;('ul#deals_tab li.active'); using ul id attribute and select li class we can select specified element from the List of elements in ul <br><br>";

echo "jQuery <br><hr><br>";

echo "<b>24) In table Design Change The Color Of Even tr Elements To 'green' And Change The Color Of Odd tr Elements To 'blue' Color? Give An Example Code?</b> <br><br>";

echo "using tr odd and even jquery we can set background color <br><br>";

echo '&#36;("#table tr:odd" ).css("background-color","green" );<br>';
echo '&#36;("#table tr:even").css("background-color","blue");<br><br>';

echo "jQuery <br><hr><br>";

echo "<b>25) How We Can Implement Animation Effects In Jquery?</b> <br><br>";

echo "<div id='box'></div> 
    <button id='b1'>Click Here !</button> <br><br> &#36;(document).ready(function(){
    &#36;('button').click(function(){
        &#36;('.box').animate({
            width: 'toggle'
        });
    });
}); <br><br>";

echo "jQuery <br><hr><br>";

echo "<b>26) Apply jQuery validation using library. </b> <br><br>";

echo "attached page for find jQuery validation using jquery <b><a style='color:blue;' href='jquery-validation.php' target='_blank'>Click Here</a></b>";

echo "<br><hr><br>";

echo "<b>27) Create custom dynamic function for require field validator.</b> <br><br>";

echo "attached page for require field validator <b><a style='color:blue;' href='validation.php' target='_blank'>Click Here</a></b>";

echo "<br><hr><br>";

echo "<b>28) Get state data by country selection (Ajax).</b><br><br>";

echo "attached page for find country state using ajax <b><a style='color:blue;' href='country-state/index.php' target='_blank'>Click Here</a></b>";

echo "<br><br>";

echo "<b>29) Image uploading with preview.</b> <br><br>";

?>
<input type="file" accept="image/*" onchange="loadFile(event)">
<style type="text/css">
#output {
    display:none;
}
</style>
<script type="text/javascript">
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      document.getElementById('output').style.display='block';
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>

<img id="output" width="600" height="300" style="border:1px solid #ddd; border-radius:4px; margin-top:20px; margin-bottom:11px;" />

<?php

echo "<br><hr><br>";

?>


