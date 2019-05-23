<?php
// if(!file_exists("welcome.txt")) {
//   die("File not found");
// } else {
//   $file=fopen("welcome.txt","r");
// }

// function customError($errno, $errstr) {
//   echo "<b>Error:</b> [$errno] $errstr<br>";
//   echo "Ending Script";
//   die();
// }

//error handler function
// function customError($errno, $errstr) {
//   echo "<b>Error:</b> [$errno] $errstr";
// }

// //set error handler
// set_error_handler("customError");

// //trigger error
// echo($test);

// echo "<br>";

// //Trigger an Error
// //In a script where users can input data it is useful to trigger errors when an illegal input occurs. In PHP, this is done by the trigger_error() function.
// $test=2;
// if ($test>=1) {
//   trigger_error("Value must be 1 or below");
// }


// //error handler function
// function customError($errno, $errstr) {
//   echo "<b>Error:</b> [$errno] $errstr<br>";
//   echo "Ending Script";
//   die();
// }

// //set error handler
// set_error_handler("customError",E_USER_WARNING);

// //trigger error
// $test=2;
// if ($test>=1) {
//   trigger_error("Value must be 1 or below",E_USER_WARNING);
// }


//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "someone@example.com","From: webmaster@example.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);

//trigger error
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}

?>