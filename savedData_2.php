<?php
// Assuming form data is submitted using POST method
$name = $_POST['txtname'] ?? '';
$candi = $_POST['txtCand'] ?? '';
$rollno = $_POST['txtRollNo'] ?? '';
$voterid = $_POST['pass'] ?? '';

// Password validation
$valid_passwords = ["OVS246", "OVS244", "OVS243", "OVS242", "OVS247", "OVS248", "OVS249", "OVS250", "OVS241", "OVS240"];
$password_valid = in_array($voterid, $valid_passwords);

// Database connection
include('dbConnect.php');

// Check if roll number already exists and password is valid
if ($password_valid) {
    // Check if roll number exists in the users table
  
        $sql = "UPDATE users_2nd
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
