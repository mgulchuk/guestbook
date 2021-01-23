<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

var_dump($_GET);

// Pretend that we validated
require('guestBookValidation.php');
if(!$Valid){
    die("Please click back and try again");
}

// Connect to your database
require('/home2/mgulchuk/db.php');

// Get the form data and "escape" it
$firstName = mysqli_real_escape_string($cnxn, $_POST['firstName']);
$lastName = mysqli_real_escape_string($cnxn, $_POST['lastName']);
$job = mysqli_real_escape_string($cnxn, $_POST['job']);
$company = mysqli_real_escape_string($cnxn, $_POST['company']);
$linkedIn = mysqli_real_escape_string($cnxn, $_POST['linkedIn']);
$email = mysqli_real_escape_string($cnxn, $_POST['email']);
$meet = mysqli_real_escape_string($cnxn, $_POST['meet']);
$other = mysqli_real_escape_string($cnxn, $_POST['other']);
$format = mysqli_real_escape_string($cnxn, $_POST['check']);
$mailing = mysqli_real_escape_string($cnxn, $_POST['gridCheck']);
if($mailing)
    $mailing = "Yes";

// Write an SQL statement
$sql = "INSERT INTO guestBook (first, last, job, company, linkedIn, email, meet, other, mailing, format)
VALUES ('$firstName', '$lastName', '$job', '$company', '$linkedIn', '$email', '$meet', '$other', '$mailing', '$format')";

echo $sql;

// Send the query to the database
$result = mysqli_query($cnxn, $sql);

// Print a confirmation
if ($result){
    echo "Guest inserted successfully";
}
