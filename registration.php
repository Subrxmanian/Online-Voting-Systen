<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
          
      }
     
    </style>
</head>
<body>
    <div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href=index.html  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="candidate.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
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
    


    </section>
    <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">Registration Page</h1>
                <form action="insert.php" method="post" id=ConfirmForm> 
                <table>
                    <tr>
                        <td class="td-1">Name :</td>
                        <td class="td-1"><input type="text" style="text-align: left;" name="txtName" required></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input type="email" style="text-align: left;" name="txtEmail" required></td>
                    </tr>
                    <tr>
                        <td class="td-1">Branch :</td>
                        <td class="td-1"><input type="text" style="text-align: left;" name="txtBranch" required></td>
                    </tr>
                    <tr>
                        <td class="td-1">Mobile Number :</td>
                        <td class="td-1"><input type="number" style="text-align: left;" name="txtNumber" required pattern="[6-9]{1}[0-9]{9}"></td>
                    </tr>
                  
                    <tr>
                        <td class="td-1">Roll No. :</td>
                        <td class="td-1" required><input type="varchar" style="text-align: left;" name="txtRollNo"></td>
                    </tr><tr>
                        <td class="td-1">Year :</td>
                        <td><select name="txtyear" class="td-2">
                          
                          <option value=1>1st Year</option>
                          <option value=2>2nd Year</option>
                          <option value=3>3rd Year</option>
            
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                    </tr>

                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/7.svg" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <hr>
        <div class="Footer">
        <ul style="display: flex;">
                  <li style="list-style: none; padding: 10px; "><a href="index.html" style="text-decoration: none; color: #5125c1;">Home</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="about.php" style="text-decoration: none; color: #5125c1;">About</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="suggestion.html" style="text-decoration: none; color: #5125c1;">Suggestion</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="contact_form.php" style="text-decoration: none; color: #5125c1;">Contact</a></li>
                </ul>
        </div>
      </div>
      <div class="col-md-6">
          <hr>
          <div class="social-icon">
            <ul >
                            
                            
              <li>
                <a href="https://www.linkedin.com/in/subramanian-m-0b5041247/">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/subrx_txm/">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="mailto:srianandhavelmsubramanian@gmail.com">
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
                        </ul>
          </div>
        </div>
    </div>
  </div>
  </section>



   
    

</body>
</html>