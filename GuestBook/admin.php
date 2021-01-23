<?php

/**
 * 305/students.php reads students from a database
 * Michael Gulchuk
 * 2/11/2020
 *
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
require('check-login.php');
// connect to db
require('/home2/mgulchuk/db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Table</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">

    <h1>Student Summary</h1>

    <table id="student-table">
        <thead>
            <tr>
                <th>First</th>
                <th>Last</th>
                <th>Job</th>
                <th>Company</th>
                <th>linkedIn</th>
                <th>Email</th>
                <th>Meet</th>
                <th>Other</th>
                <th>Mailing</th>
                <th>Format</th>
            </tr>
        </thead>

    <?php
        // Define a query
        $sql = "SELECT * FROM guestBook";

        // Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        // Process the result
        foreach ($result as $row){
            //var_dump($row);

            $first = $row['first'];
            $last = $row['last'];
            $job = $row['job'];
            $company = $row['company'];
            $linkedIn = $row['linkedIn'];
            $email = $row['email'];
            $meet = $row['meet'];
            $other = $row['other'];
            $mailing = $row['mailing'];
            $format = $row['format'];

            echo " <tr>
                     <td>$first</td>
                     <td>$last</td>
                     <td>$job</td>
                     <td>$company</td>
                     <td>$linkedIn</td>
                     <td>$email</td>
                     <td>$meet</td>
                     <td>$other</td>
                     <td>$mailing</td>
                     <td>$format</td>
                   </tr>";
        }

    ?>
    </table>
    <a href="guestBook.html" >Home Page</a><br>
    <a href="login.php" >Log out</a>
</div>


<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#student-table').DataTable();
</script>
</body>
</html>

