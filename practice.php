<?php
    // This is a php block
    // PHP TUTORIAL
    // Display php version
    echo phpversion();
    // All variables are not equal
    // $color != $COLOR
    // Variables
    $color = "gray"; //This states that $color is now designated as "gray"
    echo $color;
    // This is a comment. You can put anything here and it will not be executed on the page.
    /* 
        This is a multi-line comment.
        You can put anything you want here and
        it will not be executed on the page.
    */
    // Declaring php variables
    $x = 5; // This will hold the integer value of 5
    $y = "John"; // This will hold the string value of John
    // Output Variables
    $txt = "tacos"; // Defining the variable that will be held in $txt
    echo "I love $txt!"; // This will execute the line I love tacos!
    echo "I love " . $txt . "!"; // This will also produce the same result of I love tacos!
    // This will output the sum of the variables
    $x = 5; // This will hold the integer 5
    $y = 4; // This will hold the integer 4
    echo $x + $y; // This will output 9
    // To get the type of variable, use the var_dump() function.
    $x = 5;
    var_dump()$x;
    // These are the other variable types that will display
    var_dump(5); // integer
    var_dump("John"); //string
    var_dump(3.14); // float
    var_dump(true); // boolean
    var_dump([2, 3, 56]); // array of numbers
    var_dump(NULL); // null
    // Assign multiple values in one line
    $x = $y = $z = "Fruit";
    /*
        In php, variables can be declared anwhere in the script.
        The scope of a variable is the part of the script where the variable can be referenced/ used.
        Php has three different variable types: Local, Global, Static
    */ 
    // A Variable declared outside of a function has a GLOBAL SCOPE and can only be accessed outside a function
    $x = 5; // global scope

    function myTest() {
     // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

echo "<p>Variable x outside function is: $x</p>";
// A variable defined within a function has a LOCAL SCOPE and can only be accessed within that function
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
// The GLOBAL keyword is used to access a global variable from within a function
// To do this, use the GLOBAL keyword before the variables (inside the function):
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
// Php also stores all GLOBAL variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within fundtions and can be used to update global variables directly.
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
// Normally when a function is completed/ executed, all of it's variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
// To do this, use the STATIC keyword when you firrst declare the variable:
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
// Then, each time the function is called, the variable will still have the information it contained from the last time the function was called *NOTE* The variable is still LOCAL to the function.
// With Php there are two basic ways to get output: echo and print
// echo and print are more or less the same. they are both used to output the data to the screen.
// The differnces are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster thn print.
// The echo statement can be used with or without parentheses: echo or echo().
/*
echo "Hello";
//same as:
echo("Hello");
*/ 
// The following example shows how to output text with the echo command (notice that the text can contain HTML markup):
/*
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
*/
// The following example shows how to output text and variables with the echo statement:
/*
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
*/
/*
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
When using double quotes, variables can be inserted to the string as in the example above.
When using single quotes, variables have to be inserted using the . operator, like this:
*/
/*
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';
*/
// The print statement can be used with or without parentheses: print or print().
/*
print "Hello";
//same as:
print("Hello");
*/
// The following example shows how to output text with the print command (notice that the text can contain HTML markup):
/*
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
*/
// The following example shows how to output text and variables with the print statement:
/*
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
*/
/*
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
When using double quotes, variables can be inserted to the string as in the example above.
When using single quotes, variables have to be inserted using the . operator, like this:
*/
/*
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';
*/
/*
Variables can store data of different types, and different data types can do different things.
PHP supports the following data types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/
/*
$x = 5;
var_dump($x);
*/
// A string is a sequence of characters, like "Hello world!".
// A string can be any text inside quotes. You can use single or double quotes:
/*
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
*/
/* 
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
Rules for integers:
An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
*/
/*
$x = 5985;
var_dump($x);
*/
// A float (floating point number) is a number with a decimal point or a number in exponential form.
// In the following example $x is a float. The PHP var_dump() function returns the data type and value:
/*
$x = 10.365;
var_dump($x);
*/
// A Boolean represents two possible states: TRUE or FALSE.
/*
$x = true;
var_dump($x);
*/
// Booleans are often used in conditional testing.
// An array stores multiple values in one single variable.
// In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
/*
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
*/
/*
Classes and objects are the two main aspects of object-oriented programming.
A class is a template for objects, and an object is an instance of a class.
When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
Let's assume we have a class named Car that can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
*/
/*
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
*/
/*
Null is a special data type which can have only one value: NULL.
A variable of data type NULL is a variable that has no value assigned to it.
Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
Variables can also be emptied by setting the value to NULL:
*/
/*
$x = "Hello world!";
$x = null;
var_dump($x);
*/
/*
If you assign an integer value to a variable, the type will automatically be an integer.
If you assign a string to the same variable, the type will change to a string:
*/
/*
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);
*/
/*
If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
Casting allows you to change data type on variables:
*/
/*
$x = 5;
$x = (string) $x;
var_dump($x);
*/
/*
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call.
We will not talk about the resource type here, since it is an advanced topic.
*/
// A string is a sequence of characters, like "Hello world!".
/*
echo "Hello";
echo 'Hello';
*/
/*
You can use double or single quotes, but you should be aware of the differences between the two.
Double quoted strings perform action on special characters.
E.g. when there is a variable in the string, it returns the value of the variable:
*/
// Double quoted string literals perform operations for special characters:
/*
$x = "John";
echo "Hello $x";
*/
// Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:  
// Single quoted string literals returns the string as it is:
/*
$x = "John";
echo 'Hello $x';
*/
// The PHP strlen() function returns the length of a string.
// Return the length of the string "Hello world!":
// echo strlen("Hello world!");
// The PHP str_word_count() function counts the number of words in a string.
// Count the number of word in the string "Hello world!":
// echo str_word_count("Hello world!");
// The PHP strpos() function searches for a specific text within a string.
// If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
// Search for the text "world" in the string "Hello world!":
// echo strpos("Hello world!", "world"); 
// Tip: The first character position in a string is 0 (not 1).
// PHP has a set of built-in functions that you can use to modify strings.
/*
$x = "Hello World!";
echo strtoupper($x);
*/
// The strtolower() function returns the string in lower case:
/*
$x = "Hello World!";
echo strtolower($x);
*/
// The PHP str_replace() function replaces some characters with some other characters in a string.
/*
$x = "Hello World!";
echo str_replace("World", "Dolly", $x); 
*/
// The PHP strrev() function reverses a string.
/*
$x = "Hello World!";
echo strrev($x);
*/
// Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
// The trim() removes any whitespace from the beginning or the end:
/*
$x = " Hello World! ";
echo trim($x);
*/
/*
The PHP explode() function splits a string into an array.
The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
*/
// The separator is required.
/*
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

// Result:
// Array ( [0] => Hello [1] => World! )
*/
// To concatenate, or combine, two strings you can use the . operator:
/*
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
*/
/*
The result of the example above is HelloWorld, without a space between the two words.
You can add a space character like this:
*/
/*
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;
*/
/*
An easier and better way is by using the power of double quotes.
By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:
*/
/*
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
*/
/*
You can return a range of characters by using the substr() function.
Specify the start index and the number of characters you want to return.
*/
/*
$x = "Hello World!";
echo substr($x, 6, 5);
*/
// The first character has index 0.
// By leaving out the length parameter, the range will go to the end:
// Start the slice at index 6 and go all the way to the end:
/*
$x = "Hello World!";
echo substr($x, 6);
*/
// Use negative indexes to start the slice from the end of the string:
// Get the 3 characters, starting from the "o" in world (index -5):
/*
$x = "Hello World!";
echo substr($x, -5, 3);
*/
// The last character has index -1.
// Use negative length to specify how many characters to omit, starting from the end of the string:
/*
From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).
Should end up with "ow are y":
*/
/*
$x = "Hi, how are you?";
echo substr($x, 5, -3);
*/
/*
To insert characters that are illegal in a string, use an escape character.
An escape character is a backslash \ followed by the character you want to insert.
An example of an illegal character is a double quote inside a string that is surrounded by double quotes:
*/
// $x = "We are the so-called "Vikings" from the north.";
// To fix this problem, use the escape character \":
// $x = "We are the so-called \"Vikings\" from the north.";
// Other escape characters used in PHP:
/*
\'	Single Quote	
\"	Double Quote	
\$	PHP variables	
\n	New Line	
\r	Carriage Return	
\t	Tab	
\f	Form Feed	
\ooo	Octal value	
\xhh	Hex value
*/
// In this chapter we will look in depth into Integers, Floats, and Number Strings.
/*
There are three main numeric types in PHP:
Integer
Float
Number Strings
*/  
/*
In addition, PHP has two more data types used for numbers:
Infinity
NaN
*/
// Variables of numeric types are created when you assign a value to them:
/*
$a = 5;
$b = 5.34;
$c = "25";
*/
// To verify the type of any object in PHP, use the var_dump() function:
/*
var_dump($a);
var_dump($b);
var_dump($c);
*/
/*
2, 256, -256, 10358, -179567 are all integers.
An integer is a number without any decimal part.
An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
Here are some rules for integers:
An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (base 10), hexadecimal (base 16 - prefixed with 0x), octal (base 8 - prefixed with 0) or binary (base 2 - prefixed with 0b)
*/
/*
PHP has the following predefined constants for integers:
PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes
*/
/*
PHP has the following functions to check if the type of a variable is integer:
is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()
*/
/*
$x = 5985;
var_dump(is_int($x));
$x = 59.85;
var_dump(is_int($x));
*/
/*
A float is a number with a decimal point or a number in exponential form.
2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
*/
/*
PHP has the following predefined constants for floats (from PHP 7.2):
PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
*/
/*
PHP has the following functions to check if the type of a variable is float:
is_float()
is_double() - alias of is_float()
*/
/*
$x = 10.365;
var_dump(is_float($x));
*/
/*
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
PHP has the following functions to check if a numeric value is finite or infinite:
is_finite()
is_infinite()
*/
// However, the PHP var_dump() function returns the data type and value:
// Check if a numeric value is finite or infinite:
/*
$x = 1.9e411;
var_dump($x);
*/
/*
NaN stands for Not a Number.
NaN is used for impossible mathematical operations.
PHP has the following functions to check if a value is not a number:
is_nan()
*/
// However, the PHP var_dump() function returns the data type and value:
// Invalid calculation will return a NaN value:
/*
$x = acos(8);
var_dump($x);
*/
// The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.
/*
$x = 5985;
var_dump(is_numeric($x));
$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));
$x = "Hello";
var_dump(is_numeric($x));
*/
// Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.
// Sometimes you need to cast a numerical value into another data type.
// The (int), (integer), and intval() functions are often used to convert a value to an integer.
/*
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
*/
// Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.
/*
Casting in PHP is done with these statements:
(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL
*/
// To cast to string, use the (string) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;
//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
*/
// To cast to integer, use the (int) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL
$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;
*/
// To cast to float, use the (float) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL
$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;
*/
// To cast to boolean, use the (bool) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL
$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;
*/
// If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.
// Even -1 converts to true.
// To cast to array, use the (array) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;
*/
/*
When converting into arrays, most data types converts into an indexed array with one element.
NULL values converts to an empty array object.
Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
*/
// Converting Objects into Arrays:
/*
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}
$myCar = new Car("red", "Volvo");
$myCar = (array) $myCar;
var_dump($myCar);
*/
// To cast to object, use the (object) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;
*/
/*
When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.
NULL values converts to an empty object.
Indexed arrays converts into objects with the index number as property name and the value as property value.
Associative arrays converts into objects with the keys as property names and values as property values.
*/
// Converting Arrays into Objects:
/*
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
$a = (object) $a;
$b = (object) $b;
*/
// To cast to NULL, use the (unset) statement:
/*
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL
$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;
*/
// PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
// The pi() function returns the value of PI:
// echo(pi());
// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
/*
echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));
*/
// The abs() function returns the absolute (positive) value of a number:
// echo(abs(-6.7));
// The sqrt() function returns the square root of a number:
// echo(sqrt(64));
// The round() function rounds a floating-point number to its nearest integer:
/*
echo(round(0.60));
echo(round(0.49));
*/
// The rand() function generates a random number:
// echo(rand());
/*
To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
*/
// echo(rand(10, 100));
// Constants are like variables, except that once they are defined they cannot be changed or undefined.
/*
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
A valid constant name starts with a letter or underscore (no $ sign before the constant name).
Note: Unlike variables, constants are automatically global across the entire script.
*/
// To create a constant, use the define() function.
// define(name, value);
/*
Parameters:
name: Specifies the name of the constant
value: Specifies the value of the constant
*/
// Create a constant with a case-sensitive name:
/*
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
*/  
// You can also create a constant by using the const keyword.
// Create a case-sensitive constant with the const keyword:
/*
const MYCAR = "Volvo";
echo MYCAR;
*/
/*
const vs. define()
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.
*/
// From PHP7, you can create an Array constant using the define() function.
// Create an Array constant:
/*
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
*/
// Constants are automatically global and can be used across the entire script.
// This example uses a constant inside a function, even if it is defined outside the function:
/*
define("GREETING", "Welcome to W3Schools.com!");
function myTest() {
  echo GREETING;
}
myTest();
*/
/*
PHP has nine predefined constants that change value depending on where they are used, also called the "magic constants".
These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.
*/
// Here are the magic constants, with descriptions and examples:
/*
__CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.
*/
/*
Note: The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__.
*/
/*
Operators are used to perform operations on variables and values.
PHP divides the operators in the following groups:
Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators
*/
// The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.
/*
Operator	Name	Example	Result
+	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power
*/
/*
The PHP assignment operators are used with numeric values to write a value to a variable.
The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
*/
/*
Assignment	Same as...	Description
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus
*/
// The PHP comparison operators are used to compare two values (number or string):
/*
Operator	Name	Example	Result
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
*/
/*
The PHP increment operators are used to increment a variable's value.
The PHP decrement operators are used to decrement a variable's value.
*/
/*
Operator	Same as...	Description	
++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one
*/
// The PHP logical operators are used to combine conditional statements.
/*
Operator	Name	Example	Result
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true
*/
// PHP has two operators that are specially designed for strings.
/*
Operator	Name	Example	Result	
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1
*/
// The PHP array operators are used to compare arrays.
/*
Operator	Name	Example	Result
+	Union	$x + $y	Union of $x and $y	
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y
*/
// The PHP conditional assignment operators are used to set a value depending on conditions:
/*
Operator	Name	Example	Result
?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7
*/
// Conditional statements are used to perform different actions based on different conditions.
/*
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
In PHP we have the following conditional statements:
if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed
*/
// The if statement executes some code if one condition is true.
/*
if (condition) {
  // code to be executed if condition is true;
}
*/
// Output "Have a good day!" if 5 is larger than 3:
/*
if (5 > 3) {
  echo "Have a good day!";
}
*/
// We can also use variables in the if statement:
// Output "Have a good day!" if $t is less than 20:
/*
$t = 14;
if ($t < 20) {
  echo "Have a good day!";
}
*/
// If statements usually contain conditions that compare two values.
// Check if $t is equal to 14:
/*
$t = 14;
if ($t == 14) {
  echo "Have a good day!";
}
*/
// To compare two values, we need to use a comparison operator.
// Here are the PHP comparison operators to use in if statements:
/*
Operator	Name	Result
==	Equal	Returns true if the values are equal	
===	Identical	Returns true if the values and data types are identical	
!=	Not equal	Returns true if the values are not equal	
<>	Not equal	Returns true if the values are not equal	
!==	Not identical	Returns true if the values or data types are not identical	
>	Greater than	Returns true if the first value is greater than the second value	
<	Less than	Returns true if the first value is less than the second value	
>=	Greater than or equal to	Returns true if the first value is greater than, or equal to, the second value	
<=	Less than or equal to	Returns true if the first value is less than, or equal to, the second value
*/
// To check more than one condition, we can use logical operators, like the && operator:
// Check if $a is greater than $b, AND if $a is less than $c:
/*
$a = 200;
$b = 33;
$c = 500;
if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
*/
// Here are the PHP logical operators to use in if statements:
/*
Operator	Name	Description
and	And	True if both conditions are true	
&&	And	True if both conditions are true	
or	Or	True if either condition is true	
||	Or	True if either condition is true	
xor	Xor	True if either condition is true, but not both	
!	Not	True if condition is not true
*/
// We can compare as many conditions as we like in one if statement:
// Check if $a is either 2, 3, 4, 5, 6, or 7:
/*
$a = 5;
if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
*/
// The if...else statement executes some code if a condition is true and another code if that condition is false.
/*
Syntax
if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
}
*/
// Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:
/*
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
*/
// The if...elseif...else statement executes different codes for more than two conditions.
/*
Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}
*/
// Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":
/*
$t = date("H");
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
*/
// To write shorter code, you can write if statements on one line.
// One-line if statement:
/*
$a = 5;
if ($a < 10) $b = "Hello";
echo $b
*/
// if...else statements can also be written in one line, but the syntax is a bit different.
// One-line if...else statement:
/*
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;
*/   
// This technique is known as Ternary Operators, or Conditional Expressions.
// You can have if statements inside if statements, this is called nested if statements.
// An if inside an if:
/*
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
*/
// The switch statement is used to perform different actions based on different conditions.
/*
Syntax
switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}
*/
/*
This is how it works:
The expression is evaluated once
The value of the expression is compared with the values of each case
If there is a match, the associated block of code is executed
The break keyword breaks out of the switch block
The default code block is executed if there is no match
*/
/*
$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
*/
/*
When PHP reaches a break keyword, it breaks out of the switch block.
This will stop the execution of more code, and no more cases are tested.
The last block does not need a break, the block breaks (ends) there anyway.
*/
// Warning: If you omit the break statement in a case that is not the last, and that case gets a match, the next case will also be executed even if the evaluation does not match the case!
/*
What happens if we remove the break statement from case "red"?
$favcolor is red, so the code block from case "red" is executed, but since it has no break statement, the code block from case "blue" will also be executed:
*/
/*
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
*/
// The default keyword specifies the code to run if there is no case match:
// If no cases get a match, the default block is executed:
/*
$d = 4;
switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}
*/
// The default case does not have to be the last case in a switch block:
// Putting  the default block elsewhere than at the end of the switch block is allowed, but not recommended.
/*
$d = 4;
switch ($d) {
  default:
    echo "Looking forward to the Weekend";
    break;
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
}
*/
// Note: If default is not the last block in the switch block, remember to end the default block with a break statement.
// If you want multiple cases to use the same code block, you can specify the cases like this:
// More than one case for each code block:
/*
$d = 3;
switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
*/  
// In the following chapters you will learn how to repeat code by using loops in PHP.
/*
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.
Loops are used to execute the same block of code again and again, as long as a certain condition is true.
In PHP, we have the following loop types:
while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
The following chapters will explain and give examples of each loop type.
*/
// The while loop - Loops through a block of code as long as the specified condition is true.
// The while loop executes a block of code as long as the specified condition is true.
// Print $i as long as $i is less than 6:
/*
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
*/
// Note: remember to increment $i, or else the loop will continue forever.
// The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.
// The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.
// With the break statement we can stop the loop even if the condition is still true:
// Stop the loop when $i is 3:
/*
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}
*/
// With the continue statement we can stop the current iteration, and continue with the next:
// Stop, and jump to the next iteration if $i is 3:
/*
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
*/
// The while loop syntax can also be written with the endwhile statement like this
// Print $i as long as $i is less than 6:
/*
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
*/
// If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:
// Count to 100 by tens:
/*
$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i "<br>";
}
*/
// The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
// The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.
// Print $i as long as $i is less than 6:
/*
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
*/
/*
Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.
*/
// Let us see what happens if we set the $i variable to 8 instead of 1, before execute the same do...while loop again:
// Set $i = 8, then print $i as long as $i is less than 6:
/*
$i = 8;
do {
  echo $i;
  $i++;
} while ($i < 6);
*/
// The code will be executed once, even if the condition is never true.
// With the break statement we can stop the loop even if the condition is still true:
// Stop the loop when $i is 3:
/*
$i = 1;
do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
*/ 
// With the continue statement we can stop the current iteration, and continue with the next:
// Stop, and jump to the next iteration if $i is 3:
/*
$i = 0;
do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
*/
// The for loop - Loops through a block of code a specified number of times.
// The for loop is used when you know how many times the script should run.
/*
Syntax
for (expression1, expression2, expression3) {
  // code block
}
*/
/*
This is how it works:
expression1 is evaluated once
expression2 is evaluated before each iteration
expression3 is evaluated after each iteration
*/ 
// Print the numbers from 0 to 10:
/*
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
*/
/*
The first expression, $x = 0;, is evaluated once and sets a counter to 0.
The second expression, $x <= 10;, is evaluated before each iteration, and the code block is only executed if this expression evaluates to true. In this example the expression is true as long as $x is less than, or equal to, 10.
The third expression, $x++;, is evaluated after each iteration, and in this example, the expression increases the value of $x by one at each iteration.
*/
// With the break statement we can stop the loop even if the condition is still true:
// Stop the loop when $x is 3:
/*
 for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}
*/
// With the continue statement we can stop the current iteration, and continue with the next:
// Stop, and jump to the next iteration if $x is 3:
/*
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}
*/
// This example counts to 100 by tens:
/*
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
*/
// The foreach loop - Loops through a block of code for each element in an array or each property in an object.
// The most common use of the foreach loop, is to loop through the items of an array.
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  echo "$x <br>";
}
*/
// For every loop iteration, the value of the current array element is assigned to the variable $x. The iteration continues until it reaches the last array element.
/*
The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
This can be done by specifying both the key and value in the foreach definition, like this:
*/
// Print both the key and the value from the $members array:
/*
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
*/
// The foreach loop can also be used to loop through properties of an object:
// Print the property names and values of the $myCar object:
/*
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}
$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}
*/
// With the break statement we can stop the loop even if it has not reached the end:
// Stop the loop if $x is "blue":
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
*/
// With the continue statement we can stop the current iteration, and continue with the next:
// Stop, and jump to the next iteration if $x is "blue":
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
*/
// When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
// By default, changing an array item will not affect the original array:
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);
*/ 
// BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:
// By assigning the array items by reference, changes will affect the original array:
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);
*/
// The foreach loop syntax can also be written with the endforeach statement like this
// Loop through the items of an indexed array:
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
*/
// The break statement can be used to jump out of different kind of loops.
// The break statement can be used to jump out of a for loop.
// Jump out of the loop when $x is 4:
/*
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
*/
// The break statement can be used to jump out of a while loop.
/*
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
*/
// The break statement can be used to jump out of a do...while loop.
// Stop the loop when $i is 3:
/*
$i = 1;
do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
*/
// The break statement can be used to jump out of a foreach loop.
// Stop the loop if $x is "blue":
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
*/
// The continue statement can be used to jump out of the current iteration of a loop, and continue with the next.
// The continue statement stops the current iteration in the for loop and continue with the next.
// Move to next iteration if $x = 4:
/*
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
*/
// The continue statement stops the current iteration in the while loop and continue with the next.
// Move to next iteration if $x = 4:
/*
$x = 0;
while($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
*/
// The continue statement stops the current iteration in the do...while loop and continue with the next.
// Stop, and jump to the next iteration if $i is 3:
/*
$i = 0;
do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);  
*/
// The continue statement stops the current iteration in the foreach loop and continue with the next.
// Stop, and jump to the next iteration if $x is "blue":
/*
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
*/
// The real power of PHP comes from its functions.
// PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
// PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.
// Please check out our PHP reference for a complete overview of the PHP built-in functions.
// Besides the built-in PHP functions, it is possible to create your own functions.
/*
A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
*/
// A user-defined function declaration starts with the keyword function, followed by the name of the function:
/*
function myMessage() {
  echo "Hello world!";
}
*/
// Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.
// Tip: Give the function a name that reflects what the function does!
// To call the function, just write its name followed by parentheses ():
/*
function myMessage() {
  echo "Hello world!";
}
myMessage();
*/
// In our example, we create a function named myMessage().
// The opening curly brace { indicates the beginning of the function code, and the closing curly brace } indicates the end of the function.
// The function outputs "Hello world!".
// Information can be passed to functions through arguments. An argument is just like a variable.
// Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
// The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name, e.g. ("Jani"), and the name is used inside the function, which outputs several different first names, but an equal last name:
/*
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
*/
// The following example has a function with two arguments ($fname, $year):
/*
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
*/
// The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
/*
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
*/
// To let a function return a value, use the return statement:
/*
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
*/
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
// Use a pass-by-reference argument to update a variable:
/*
function add_five(&$value) {
  $value += 5;
}
$num = 2;
add_five($num);
echo $num;
*/
// By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
// The variadic function argument becomes an array.
// A function that do not know how many arguments it will get:
/*
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}
$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
*/
// You can only have one argument with variable length, and it has to be the last argument.
// The variadic argument must be the last argument:
/*
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}
$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
*/
// If the variadic argument is not the last argument, you will get an error.
// Having the ... operator on the first of two arguments, will raise an error:
/*
function myFamily(...$firstname, $lastname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}
$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
*/
/*
In the examples above, notice that we did not have to tell PHP which data type the variable is.
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
In the following example we try to send both a number and a string to the function without using strict:
*/
/*
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
*/
// To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
// In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:
/*
<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
*/
// The strict declaration forces things to be used in the intended way.
/*
PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
In the following example we specify the return type for the function:
*/
/*
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>
*/
// You can specify a different return type, than the argument types, but make sure the return is the correct type:
/*
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
*/
// An array stores multiple values in one single variable:
// $cars = array("Volvo", "BMW", "Toyota");
// An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
/*
In PHP, there are three types of arrays:
Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/
/*
In this tutorial you will learn how to work with arrays, including:
Create Arrays
Access Arrays
Update Arrays
Add Array Items
Remove Array Items
Sort Arrays
*/
/*
Array items can be of any data type.
The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.
You can have different data types in the same array.
*/
// Array items of four different data types:
/*
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
*/
// The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
// How many items are in the $cars array:
/*
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
*/
/*
In indexed arrays each item has an index number.
By default, the first item has index 0, the second item has item 1, etc.
*/
// Create and display an indexed array:   
/*
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
*/
// To access an array item you can refer to the index number.
// Display the first array item:
/*
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
*/
// To change the value of an array item, use the index number:
// Change the value of the second item:
/*
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
*/
// To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
// Display all array items:
/*
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}
*/
/*
The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.
New items get the next index number, meaning one higher than the highest existing index.
So if you have an array like this:
*/
/*
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
*/
// And if you use the array_push() function to add a new item, the new item will get the index 3:
/*
array_push($cars, "Ford");
var_dump($cars);
*/  
// But if you have an array with random index numbers, like this:
/*
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";
*/
// And if you use the array_push() function to add a new item, what will be the index number of the new item?
/*
array_push($cars, "Ford");
var_dump($cars);
*/
// Associative arrays are arrays that use named keys that you assign to them.
/*
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
*/
// To access an array item you can refer to the key name.
// Display the model of the car:
/*
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
*/  
// To change the value of an array item, use the key name:
// Change the year item:
/*
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
*/
// To loop through and print all the values of an associative array, you could use a foreach loop, like this:
// Display all array items, keys and values:
/*
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
*/
// You can create arrays by using the array() function:
// $cars = array("Volvo", "BMW", "Toyota");
// You can also use a shorter syntax by using the [] brackets:
// $cars = ["Volvo", "BMW", "Toyota"];
// Line breaks are not important, so an array declaration can span multiple lines:
/*
$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];
*/
// A comma after the last item is allowed:
/*
$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];
*/
// When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:  
/*
$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];
*/
// As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:
/*
$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];
*/
// You can declare an empty array first, and add items to it later:
/*
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
*/
// The same goes for associative arrays, you can declare the array first, and then add items to it:
/*
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
*/
// You can have arrays with both indexed and named keys:
/*
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
*/
// To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
// Access an item by referring to its index number:
/*
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
*/
// Note: The first item has index 0.
// To access items from an associative array, use the key name:
// Access an item by referring to its key name:
/*
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
*/
// You can use both double and single quotes when accessing an array:
/*
echo $cars["model"];
echo $cars['model'];
*/
/*
Array items can be of any data type, including function.
To execute such a function, use the index number followed by parentheses ():
*/
// Execute a function item:
/*
function myFunction() {
  echo "I come from a function!";
}
$myArr = array("Volvo", 15, myFunction);
$myArr[2]();
*/
// Use the key name when the function is an item in a associative array:
// Execute function by referring to the key name:
/*
function myFunction() {
  echo "I come from a function!";
}
$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);
$myArr["message"]();
*/
// To loop through and print all the values of an associative array, you can use a foreach loop, like this:
// Display all array items, keys and values:
/*
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
*/
// To loop through and print all the values of an indexed array, you can use a foreach loop, like this:
// Display all array items:
/*
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}
*/  
// To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
// Change the second array item from "BMW" to "Ford":
/*
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
*/
// Note: The first item has index 0.
// To update items from an associative array, use the key name:
// Update the year to 2024:
/*
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
*/
// There are different techniques to use when changing item values in a foreach loop.
// One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
// Change ALL item values to "Ford":
/*
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);
*/
/*
Note: Remember to add the unset() function after the loop.
Without the unset($x) function, the $x variable will remain as a reference to the last array item.
To demonstrate this, see what happens when we change the value of $x after the foreach loop:
*/
// Demonstrate the consequence of forgetting the unset() function:
/*
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
$x = "ice cream";
var_dump($cars);
*/
// To add items to an existing array, you can use the bracket [] syntax.
// Add one more item to the fruits array:
/*
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
*/
// To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
// Add one item to the car array:
/*
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
*/
// To add multiple items to an existing array, use the array_push() function.
// Add three item to the fruits array:
/*
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
*/
// To add multiple items to an existing array, you can use the += operator.
// Add two items to the cars array:
/*
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
*/
/*
To remove an existing item from an array, you can use the array_splice() function.
With the array_splice() function you specify the index (where to start) and how many items you want to delete.
*/
// Remove the second item:
/*
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
*/
// After the deletion, the array gets reindexed automatically, starting at index 0.
// You can also use the unset() function to delete existing array items.
// Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
// Remove the second item:
/*
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
*/  
// To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete.
// Remove 2 items, starting a the second item (index 1):
/*
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
*/
// The unset() function takes a unlimited number of arguments, and can therefore be used to delete multiple array items:
// Remove the first and the second item:
/*
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
*/
/*
To remove items from an associative array, you can use the unset() function.
Specify the key of the item you want to delete.
*/
// Remove the "model":
/*
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
*/
/*
You can also use the array_diff() function to remove items from an associative array.
This function returns a new array, without the specified items.
*/
// Create a new array, without "Mustang" and "1964":
/*
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
*/
// Note: The array_diff() function takes values as parameters, and not keys.
// The array_pop() function removes the last item of an array.
// Remove the last item:
/*
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
*/
// The array_shift() function removes the first item of an array.
// Remove the first item:
/*
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
*/
// The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
/*
In this chapter, we will go through the following PHP array sort functions:
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
// The following example sorts the elements of the $cars array in ascending alphabetical order:
/*
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
*/
// The following example sorts the elements of the $numbers array in ascending numerical order:
/*
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
*/
// The following example sorts the elements of the $cars array in descending alphabetical order:
/*
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
*/
// The following example sorts the elements of the $numbers array in descending numerical order:
/*
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
*/
// The following example sorts an associative array in ascending order, according to the value:
/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
*/
// The following example sorts an associative array in ascending order, according to the key:
/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
*/
// The following example sorts an associative array in descending order, according to the value:
/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
*/
// The following example sorts an associative array in descending order, according to the key:
/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
*/
/*
In the previous pages, we have described arrays that are a single list of key/value pairs.
However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
*/
/*
A multidimensional array is an array containing one or more arrays.
PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
*/
/*
The dimension of an array indicates the number of indices you need to select an element.
For a two-dimensional array you need two indices to select an element
For a three-dimensional array you need three indices to select an element
*/
/*
A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
First, take a look at the following table:
*/
/*
Name	Stock	Sold
Volvo	22	18
BMW	15	13
Saab	5	2
Land Rover	17	15
*/
// We can store the data from the table above in a two-dimensional array, like this:
/*
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
*/
/*
Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.
To get access to the elements of the $cars array we must point to the two indices (row and column):
*/
/*
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
*/
// We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
/*
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}
*/
// PHP has a set of built-in functions that you can use on arrays.
/*

Function	Description
array()	Creates an array
array_change_key_case()	Changes all keys in an array to lowercase or uppercase
array_chunk()	Splits an array into chunks of arrays
array_column()	Returns the values from a single column in the input array
array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
array_count_values()	Counts all the values of an array
array_diff()	Compare arrays, and returns the differences (compare values only)
array_diff_assoc()	Compare arrays, and returns the differences (compare keys and values)
array_diff_key()	Compare arrays, and returns the differences (compare keys only)
array_diff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
array_diff_ukey()	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
array_fill()	Fills an array with values
array_fill_keys()	Fills an array with values, specifying keys
array_filter()	Filters the values of an array using a callback function
array_flip()	Flips/Exchanges all keys with their associated values in an array
array_intersect()	Compare arrays, and returns the matches (compare values only)
array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)
array_intersect_key()	Compare arrays, and returns the matches (compare keys only)
array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
array_key_exists()	Checks if the specified key exists in the array
array_keys()	Returns all the keys of an array
array_map()	Sends each value of an array to a user-made function, which returns new values
array_merge()	Merges one or more arrays into one array
array_merge_recursive()	Merges one or more arrays into one array recursively
array_multisort()	Sorts multiple or multi-dimensional arrays
array_pad()	Inserts a specified number of items, with a specified value, to an array
array_pop()	Deletes the last element of an array
array_product()	Calculates the product of the values in an array
array_push()	Inserts one or more elements to the end of an array
array_rand()	Returns one or more random keys from an array
array_reduce()	Returns an array as a string, using a user-defined function
array_replace()	Replaces the values of the first array with the values from following arrays
array_replace_recursive()	Replaces the values of the first array with the values from following arrays recursively
array_reverse()	Returns an array in the reverse order
array_search()	Searches an array for a given value and returns the key
array_shift()	Removes the first element from an array, and returns the value of the removed element
array_slice()	Returns selected parts of an array
array_splice()	Removes and replaces specified elements of an array
array_sum()	Returns the sum of the values in an array
array_udiff()	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
array_udiff_assoc()	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
array_udiff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
array_uintersect()	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
array_uintersect_assoc()	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
array_uintersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
array_unique()	Removes duplicate values from an array
array_unshift()	Adds one or more elements to the beginning of an array
array_values()	Returns all the values of an array
array_walk()	Applies a user function to every member of an array
array_walk_recursive()	Applies a user function recursively to every member of an array
arsort()	Sorts an associative array in descending order, according to the value
asort()	Sorts an associative array in ascending order, according to the value
compact()	Create array containing variables and their values
count()	Returns the number of elements in an array
current()	Returns the current element in an array
each()	Deprecated from PHP 7.2. Returns the current key and value pair from an array
end()	Sets the internal pointer of an array to its last element
extract()	Imports variables into the current symbol table from an array
in_array()	Checks if a specified value exists in an array
key()	Fetches a key from an array
krsort()	Sorts an associative array in descending order, according to the key
ksort()	Sorts an associative array in ascending order, according to the key
list()	Assigns variables as if they were an array
natcasesort()	Sorts an array using a case insensitive "natural order" algorithm
natsort()	Sorts an array using a "natural order" algorithm
next()	Advance the internal array pointer of an array
pos()	Alias of current()
prev()	Rewinds the internal array pointer
range()	Creates an array containing a range of elements
reset()	Sets the internal pointer of an array to its first element
rsort()	Sorts an indexed array in descending order
shuffle()	Shuffles an array
sizeof()	Alias of count()
sort()	Sorts an indexed array in ascending order
uasort()	Sorts an array by values using a user-defined comparison function and maintains the index association
uksort()	Sorts an array by keys using a user-defined comparison function
usort()	Sorts an array by values using a user-defined comparison function
*/
// Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.
/*
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
The next chapters will explain some of the superglobals, and the rest will be explained in later chapters.
*/
// $GLOBALS is an array that contains all global variables.
/*
Global variables are variables that can be accessed from any scope.
Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.
To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.
*/
// Refer to the global variable $x inside a function:
/*
ARRAY FUNCTIONS
*/   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP/ Practice</title>
    <style>
        * {
            font-family: Aptos,Arial,Tahoma,Verdana, sans-serif;
        }

    </style>
</head>
<body>
    <div class="navbar">
    </div>
</body>
</html>