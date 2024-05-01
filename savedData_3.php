<?php
// Assuming form data is submitted using POST method
$name = $_POST['txtname'] ?? '';
$candi = $_POST['txtCand'] ?? '';
$rollno = $_POST['txtRollNo'] ?? '';
$voterid = $_POST['pass'] ?? '';

// Password validation
$valid_passwords = ["OVS346", "OVS344", "OVS343", "OVS342", "OVS347", "OVS348", "OVS349", "OVS350", "OVS341", "OVS340"];
$password_valid = in_array($voterid, $valid_passwords);

// Database connection
include('dbConnect.php');

// Check if roll number already exists and password is valid
if ($password_valid) {
    // Check if roll number exists in the users table
  
        $sql = "UPDATE users_3rd
                SET votes = :candi
                WHERE name = :name";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":candi", $candi);
        $success = $stmt->execute();

        if ($success) {
            include('successfully.php');
        } else {
            include('reject.php');   
        }
    } else {
        // Roll number does not exist
        include('reject.php');
    }
?>
