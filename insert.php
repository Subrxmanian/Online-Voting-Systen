<?php

$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$number = $_REQUEST['txtNumber'];
$rollno =  $_REQUEST['txtRollNo'];
$Branch =  $_REQUEST['txtBranch'];
$year=$_REQUEST['txtyear'];




//database connection
include('dbConnect.php');

if($year == 1)
{
$sql = "INSERT into users(name,email,Branch,number,rollno,year) values(:name,:email,:Branch,:number,:rollno,:year)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":Branch",$Branch);
$stmt->bindParam(":number",$number);

$stmt->bindParam(":rollno",$rollno);
$stmt->bindParam(":year",$year);

$stmt->execute();
}
else if($year == 2)
{
    $sql = "INSERT into users_2nd(name,email,Branch,number,rollno,year) values(:name,:email,:Branch,:number,:rollno,:year)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":Branch",$Branch);
$stmt->bindParam(":number",$number);

$stmt->bindParam(":rollno",$rollno);
$stmt->bindParam(":year",$year);

$stmt->execute();
}
else{
    $sql = "INSERT into users_3rd(name,email,Branch,number,rollno,year) values(:name,:email,:Branch,:number,:rollno,:year)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":Branch",$Branch);
$stmt->bindParam(":number",$number);

$stmt->bindParam(":rollno",$rollno);
$stmt->bindParam(":year",$year);

$stmt->execute();
}

header('location:successfully.php');
?>