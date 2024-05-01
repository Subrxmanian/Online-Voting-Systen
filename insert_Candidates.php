
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
        
      }
      table{
        margin:auto;
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
                <h1 style="padding-top: 20px;">Candidate Enroll</h1>
                <p style="padding-top: 20px;">1<sup>st</sup> Year Enroll</p>
                <form action="process_cand.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td class="td-1">Name :</td>
                        <td class="td-1"><input   requiredtype="text" style="text-align: left;" name="txtName" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input   requiredtype="email" style="text-align: left;" name="txtEmail"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Mobile Number :</td>
                        <td class="td-1"><input  required type="number" style="text-align: left;" name="txtNumber"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Branch :</td>
                        <td><select name="txtbranch"  required>
                          
                        <option>BCA</option>
                          <option>BSC CS </option>
                          <option>BSC IT</option>
                          <option>BCOM</option>
                          <option>BSC CSDA</option>
                          <option>BBA</option>
                          <option>OTHERS</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Roll No. :</td>
                        <td class="td-1"><input  required type="text" style="text-align: left;" name="txtRollNo"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Enrollment ID :</td>
                        <td class="td-1"><input  required type="text" style="text-align: left;" name="txtEnrollID"></td>
                    </tr>
                   
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/8.svg" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
</body>
</html>