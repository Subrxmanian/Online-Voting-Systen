<?php

include("dbConnect.php");



$sql = "SELECT votes,count(*) as result from  `users` group by votes";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1st Year | Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    .card-5{
        border: 2px black solid;
        padding: 30px;
        margin-top:5%;
        width:70%;
        margin-left:auto;
        margin-right:auto;
        
    }
    #footersection{
        margin-top:18%;
    }
    </style>
</head>
<body >
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-5">
            <h2><strong>Result</strong></h2>
            <hr>
        <?php foreach($rs as $row){
  
            if ($row['votes']!= NULL)
            {
                
                echo "<strong>".$row['votes']." = ".$row['result']." </strong><br>";
                echo "
                <div class='progress'>
                  <div class='progress-bar progress-bar-striped bg-success progress-bar-animated' role='progressbar' aria-valuenow=".$row['votes']." aria-valuemin=\"0\" aria-valuemax=\"1000\" style='width: ".$row['result']."%'>
                  </div>
                </div>
                ";
            }
}

?>

        </div>
    </div>
</div>

</div>

</body>
</html>
