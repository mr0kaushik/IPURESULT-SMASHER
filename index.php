<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>IPURESULT SMASHER</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script defer type="text/javascript" src="js/script.js"></script>
    </head>

    <body>
      <!-- NAVIGATION BAR -->
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand"><h3 class="logo">IPU<span>RESULT-</span>SMASHER</h3></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" name="button">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
              <li class="nav-item"><a class="nav-link" href="ourteam.php">Our Team</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- MAIN BODYPART -->


        <div class="container-fluid padding body">
            <div class="row text-center padding">
              <div class="col-md-12">
                    <h2>GET YOUR SEMESTER RESULT HERE</h2>
                    <form class="enrollment-form" onsubmit="return getCall" method="post">
                        <input type="text" name="enrollment-no" id="inputRoll" placeholder="Enter Enrollment No."
                        pattern="[0-9]{11}" title="Please enter valid enrollment number.">
                        <button type="submit" id="searchbtn" name="button">GET RESULT</button>
                    </form>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div id="userdata">

                </div>
              </div>
            </div>

         
        </div>

        <!-- FOOTER -->
        
        <footer>
          <div class="container-fluid padding">
            <div class="row text-center">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <h3 class="logo">IPU<span>RESULT-</span>SMASHER</h3>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                <ul>
                  <li><a href="www.facebook.com" id="fb">
                    <i class="fab fa-facebook-f"></i>
                  </a></li>
                  <li><a href="www.gmail.com" id="gm">
                    <i class="fas fa-envelope"></i>
                  </a></li>
                  <li><a href="www.github.com" id="git">
                    <i class="fab fa-github"></i>
                  </a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4 copyright">
                <p>©2019 <span>IPURESULT-SMASHER</span></p>
              </div>
            </div>
          </div>
        </footer>
        
  </body>
</html>
