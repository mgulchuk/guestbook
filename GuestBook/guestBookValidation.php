<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


$Valid = true;

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$meet = $_POST['meet'];
$linkedIn = $_POST['linkedIn'];
$checked = $_POST['gridCheck'];

if($_POST['firstName'])
    $fname = $_POST['firstName'];
else {
    echo "<p>First name is required</p>";
    $Valid = false;
}

if($_POST['lastName'])
    $lname = $_POST['lastName'];
else {
    echo "<p>Last name is required</p>";
    $Valid = false;
}

if(!empty($email)){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email format</p>";
        $Valid = false;
    }
}


if(isset($checked) == "yes"){
    if(empty($email)){
        echo "<p>Please enter an email</p>";
        $Valid = false;
   }
}

if($meet == "Choose..."){
    echo "<p>Please select an option</p>";
    $Valid = false;
}

if(!empty($linkedIn)){
    if (!filter_var($linkedIn, FILTER_VALIDATE_URL)) {
        echo "<p>Please enter a valid linkedIn</p>";;
        $Valid = false;
    }
}

if($Valid == true)
    var_dump($_POST);
