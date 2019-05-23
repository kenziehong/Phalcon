<?php

$variable_1 = 1;
$variable_2 = &$variable_1 +1;
$variable_2 = 5;
echo $variable_1; //5
echo $variable_2; //5

function binhphuong(&$parmater)
{
    $parmater *= $parmater;
}
binhphuong($variable_2); //25, not 5
echo $variable_2; ///25, not 5


$x = 5; // global scope
 
function myTest5() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest5();

echo "<p>Variable x outside function is: $x</p>";

//You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.

function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";


////////////////////////////
$x = 5;
$y = 10;

function myTest3() {
    global $x, $y;
    $y = $x + $y;
}

function myTest4() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 


myTest3();
myTest4();
echo $y; // outputs 15

/////////////////////////STATIC>>>>>>
// PHP The static Keyword
// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

// To do this, use the static keyword when you first declare the variable:
// Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

// Note: The variable is still local to the function.

function myTest5() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest5();
myTest5();
myTest5();



//PHP echo and print Statements
// echo and print are more or less the same. They are both used to output data to the screen.

// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

