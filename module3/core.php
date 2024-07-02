<?php
echo "1) Write a PHP program to enter marks of five subjects Physics, Chemistry, Biology, Mathematics and Computer, calculate percentage and grade by if else<br><br>";

function findGrade()
{
    $sub_1 = 95;
    $sub_2 = 85;
    $sub_3 = 85;
    $sub_4 = 70;
    $sub_5 = 90;

    $total = NULL;
    $average = NULL;
    $percentage = NULL;
    $grade = NULL;

    $total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
    $average = $total / 5.0;
    $percentage = ($total / 500.0) * 100;

    if ($average >= 90)
        $grade = "A";
    else if ($average >= 80 && $average < 90)
        $grade = "B";
    else if ($average >= 70 && $average < 80)
        $grade = "C";
    else if ($average >= 60 && $average < 70)
        $grade = "D";
    else
        $grade = "E";

    "Total marks   = " . $total . "/500<br>";
    "Average marks = " . $average . "<br>";
    "Percentage    = " . $percentage . "%<br>";
    echo "Grade   = '" . $grade . "'<br>";
}

findGrade();

echo "<br><hr><br>";

echo "2) write a PHP program for find 'Thursday' in week using switch Function.";

echo "<br><br>";

function findDay($day)
{
    switch ($day) {
        case "1":
            echo "Monday";
            break;
        case "2":
            echo "Tuesday";
            break;
        case "3":
            echo "Wednesday";
            break;
        case "4":
            echo "Thursday";
            break;
        case "5":
            echo "Friday";
            break;
        case "6":
            echo "Saturday";
            break;
        case "7":
            echo "Sunday";
            break;
        default:
            echo "Invalid number";
    }
}

echo findDay(4);

echo "<br><hr><br>";

echo "3) Write a PHP program to check Leap years between 1901 to 2016 Using nested if.";

echo "<br><br>";

$startYear = 1901;
$endYear = 2016;
$yearsToCheck = range($startYear, $endYear);

foreach ($yearsToCheck as $year) {
    $isLeapYear = (bool) date('L', strtotime("$year-01-01"));
    if($isLeapYear === true) echo $year . " is a leap year <br>";
}

echo "<br><hr><br>";

echo "4) Write a PHP program to find the largest of three numbers using ternary Operator.";

echo "<br><br>";

echo $number1 = 12;
echo '<br>';
echo $number2 = 7; 
echo '<br>';
echo $number3 = 15; 
echo '<br>';

$maxNumber = max($number1, $number2, $number3); 
echo "<br>The largest number among three is: $maxNumber"."<br>";

echo "<br><hr><br>";

echo "5) Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, o 34";

echo "<br><br>";

function Fibonacci($n){ 
  
    $num1 = 0; 
    $num2 = 1; 
  
    $counter = 0; 
    while ($counter < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    } 
} 

$n = 34; 
Fibonacci($n); 

echo "<br><hr><br>";

echo "6) Write a program to find whether a number is Armstrong or not Write a program to print the below format :
59
2610
3711
4812";

echo "<br><br>";

function armstrong_number($num)
{
    $sl = strlen($num);
    
    $sum = 0;
    $num = (string)$num;
    
    for ($i = 0; $i < $sl; $i++) {
        $sum = $sum + pow((string)$num{$i}, $sl);
    }
    
    if ((string)$sum == (string)$num) {
        return "True";
    } else {
        return "False";
    }
}

echo armstrong_number(59);
echo "<br><br>";
echo armstrong_number(2610);
echo "<br><br>";
echo armstrong_number(3711);
echo "<br><br>";
echo armstrong_number(4812);

echo "<br><hr><br>";

echo "7) Write a program for this Pattern:<br>
***** <br>
*<br>
*<br>
*<br>
*****<br><br>";

for ($row=0; $row<5; $row++)
{
    for ($column=0; $column<=7; $column++)
    {
        if ($column == 1 or (($row == 0 or $row == 4) and ($column > 1 and $column < 6)) or ($row == 1 and $column > 5 and $column < 5))
            echo "*";
        else  
            echo " ";
    }        
    echo "<br>";
}

echo "<br><hr><br>";

echo "8) What will be the values of $a and $b after the code below is executed? Explain your answer.";

echo "The statement '.$b.' = '&$a; sets $b equal to a reference to $a. $b remains a reference to $a, anything done to $a will affect $b and vice versa.
<br>
So when we subsequently execute the statement $b = '2$b', $b is set equal to the string '2' followed by the then-current value of $b (which is the same as $a) which is 1, so this results in $b being set equal to the string '21' (ex., the concatenation of '2' and '1'). And, since $b is a reference to $a, this has the same affect on the value of $a, so both end up equal to '21'";


echo "<br><hr><br>";

echo "9) How can you tell if a number is even or odd without using any Condition or loop? <br>";

echo "number ".$num = 12;
echo "<br>";
echo $even = ($num % 2 == 0);
echo "<br>";
echo $odd = ($num % 2 != 0);

echo "<br><hr><br>";

echo "10) How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array.<br>";

$index = "Indexed or Numeric Arrays<br>";

function indexArray()
{
    $index_json = '["JSON", "to", "PHP", "Array"]';
    print_r (json_decode($index_json));
}
echo indexArray();
echo "<br>";

$asso = "Associative Arrays<br>";

function assoArray()
{
    $json = '{"UK": "London", "ES": "Madrid", "IT": "Rome"}';
    print_r (json_decode($json));
}
echo assoArray();
echo "<br>";

$multi = "Multidimensional Arrays<br>";

function multidArray()
{
    $json = '{"name": "Aakash", "age": 38, "address": {"country": "India", "city": "Gujarat"}}';
    print_r (json_decode($json));
}
echo multidArray();
echo "<br>";

echo "<br><hr><br>";

echo "11) Write program to remove duplicate values from array<br>";

$a = array(
    "red",
    "green",
    "red",
    "blue"
);

print_r(array_unique($a));

echo "<br><hr><br>";

echo "12) Get random values from array<br>";

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

print_r(array_rand($a,1));

echo "<br><hr><br>";

echo "13) Write a PHP script which decodes the following JSON string.<br><br>";

$json = '{
    "id": 5,
    "image": "image",
    "link_type": "category",
    "link_title": "Dresses",
    "link_id": "8",
    "category_id": [
        "8"
    ],
    "brand_id": [],
    "position": "1"
}';

$j1 = json_decode($json, true);
print_r($j1);

echo "<br><hr><br>";

echo "14) Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total.<br><br>";

$arr = [21, 12, 16, 14, 18, 22];

$sum = 0;

for ($i = 0; $i < sizeof($arr); $i++) {
    $sum = $sum + $arr[$i];
}

echo "Sum of Array Values:" . $sum;

echo "<br><hr><br>";

echo "15) Declare a Multi Dimensioned array of floats called balances having Three rows and five columns.<br>";

$marks = array( 
      
    "Aditya" => array(
        "Physics" => 95, 
        "Statistics" => 85, 
        "History" => 74, 
        "Science" => 80, 
        "Math" => 90,
    ),
    "Varsha" => array(
        "Physics" => 78, 
        "Statistics" => 98, 
        "History" => 46, 
        "Science" => 80, 
        "Math" => 90,
    ), 
    "Nidhi" => array( 
        "Physics" => 88, 
        "Statistics" => 46, 
        "History" => 99, 
        "Science" => 80, 
        "Math" => 90,
    ),
); 

echo "Display Marks: <br>"; 

echo "<pre>".print_r($marks)."</pre>"; 

?>
