<!DOCTYPE html>
<html lang="en">
<head>

  <!------------------  Required Meta Tags ------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

<link rel="stylesheet" href="css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!------------------  Custom css------------------>

<link rel="stylesheet" href="css/style.css">

<!------------------  Fonts CDN ------------------>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!------------------  Internal Css ------------------>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
</style>
</head>
<body>
  <!------------------  Navbar Section ------------------>
  <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.html"  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
            <li class="nav-item" >
              <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="year.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
            </li>
          
            <li class="nav-item" >
              <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
            </li>
          
          </ul>
        </div>
    </nav>
</header>
<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           <h1 class="text-center" style="margin-bottom: 10px;">I Year Candidates</h1>
           <!--<p class="text-center" style="margin-bottom: 50px;">1<sup>st</sup> Year Candidates</p>-->
         </div>
         <?php 
   
      

   $sql = "select * from candidates where approve_status=1";
   include("dbConnect.php");
    
       $result= $pdo->query($sql);
     
     $rs =   $result->fetchAll();
      
     foreach($rs as $row){
?>
        <!-- Card Start -->
          <div class="col-md-3 " style=" margin-left:25px; padding-top: 20px;">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/9.svg" alt="shinzo" height="350px">
                  <div class="card-body">
                    <h2 class="card-title"><?php echo $row['name']; ?></h2>
                    <p class="card-text"><?php echo $row['branch']; ?></p>
                    <a href="confirmation.php" class="btn btn-primary">Vote Now</a>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- Card End -->
    
          </div>
        </div>
      </section>
      <!------------------  Footer Section-->
<br><br><br>
</body>
</html>