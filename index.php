<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// This is a simple PHP script that outputs "Hello, World!" to the browser.
echo 'Hello, World!';

// variable declaration
// Variables in PHP are used to store data that can be used later in the script.
// We can declare variables in PHP using the $ sign followed by the variable name.
$x = 5; // integer variable
$y = 10; // integer variable
$sum = $x + $y; // adding two integers
// concatenation is the process of joining two strings together
// In PHP, we can concatenate strings using the dot (.) operator.
echo '<br>' .  $sum;
$greeting = "Hello, PHP!"; // string variable

// php data types
// PHP supports several data types, including integers, floats, strings, arrays, and objects.

// string data type
$name = "John Doe"; // string variable
echo '<br>' . $name; echo '<br>'; // outputs: John Doe
var_dump($name); // outputs the type and value of the variable
// integer data type
$age = 30; echo '<br>'; // integer variable
var_dump($age); // outputs the type and value of the variable
echo '<br>' . $age;
// float data type
$height = 5.9; // float variable
echo '<br>' . $height;
$pie = 3.14; // float variable
echo '<br>' . $pie;
// boolean data type
$isStudent = true; // boolean variable
echo '<br>' . ($isStudent ? 'Yes' : 'No'); // outputs 'Yes' if true, 'No' if false
// array data type
$colors = array("red", "green", "blue"); // indexed array
echo '<br>' . implode(", ", $colors); // outputs: red, green, blue
echo '<br>' . $colors[0]; // outputs: red
// associative array
$person = array("name" => "Alice", "age" => 25); // associative array
echo '<br>' . $person['name'] . ' is ' . $person['age'] . ' years old.'; // outputs: Alice is 25 years old.
// object data type
class Car {
    // An object is an instance of a class, which can contain properties and methods.
    // Properties are variables that belong to the class, and methods are functions that belong to the class.
    // In this example, we create a Car class with properties for brand and model.
    // and a method to get the car details.
    //$this keyword is used to refer to the current object instance.

    public $brand;
    public $model;

    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    function getDetails() {
        return "Car: " . $this->brand . " " . $this->model;
    }

    
}
$myCar = new Car("Toyota", "Corolla"); // creating an object of the Car class
    echo '<br>' . $myCar->getDetails(); // outputs: Car: Toyota Corolla

// PHP functions
// Functions in PHP are blocks of code that can be reused throughout the script.
// function greet($name) {
//     // This function takes a name as an argument and returns a greeting message.
//     return "Hello, " . $name . "!";

// }


?>


    
</body>
</html>