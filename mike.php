<?php
// Variables
$first_name = "Mike"; //string
$last_name = "Annibale"; //string
$food = "taco"; //string
$drink = "Mountain Dew"; //string
$age = 38; //integer
$color = "blue"; //string
$band = "Led Zeppelin"; //string
$price = 3.99; //float
$quantity = 1; //integer
$total = null; //null
$total = $price * $quantity;
$employed = true; //boolean
$country = "United States"; //string
$make = "Honda"; // string
$model = "Pilot"; // string
// Arrays
$colors = array("black", "white", "blue", "red", "yellow", "green", "purple", "orange");
// Associative Arrays
$ages = array("Peter" => 35, "Ben" => 37, "Joe" => 45);
// MultiDimensional Arrays
$students = array (
    array("John", 25, "Computer Science"),
    array("Jane", 30, "Physics"),
    array("Mike", 35,"Graphic Design")
); //Shows Name, Age, and Program
// Echos
echo "Welcome {$first_name} {$last_name}.<br>";
echo "Your favorite food is {$food}s.<br>";
echo "Your favorite drink is {$drink}.<br>";
echo "Your current age is {$age}.<br>";
echo "Your favorite color is {$color}.<br>";
echo "Your favorite band is {$band}.<br>";
echo "You want {$quantity} {$food}/s and the cost is \${$price}.<br>";
echo "The total comes to \${$total}.<br>";
echo "Are you currently employed? {$employed}.<br>";
echo "Your country of residence is {$country}.<br>";
echo "Your vehicle is a {$make} {$model}.<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php examples</title>
</head>
<body>
    
</body>
</html>