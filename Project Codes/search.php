<!doctype html>
<html lang="en">
  <head>
    <title>Online Blood Bank</title>
  </head>

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><div class="logo">
      <h1><a href="index.php"><img src="img/1lo.jpg" height="150" width="150" ; alt=""></a></h1>
    </div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home &ensp;<span class="sr-only"></span></a></li>
        <a class="nav-link" href="login.php">Log in&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="registration.php">Become a donor&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="send_req.php">Send Request for blood&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="view_req.php">View Request&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="search.php">Search for blood&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="contact_us.php">Contact Us&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="about_us.php">About Us&ensp;&ensp;&emsp;&emsp;<span class="sr-only">(current)</span></a></li>
      </ul>
</div>
</nav>
<body>
    <!--  Start From here  -->
    
    <!--    header start  -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="admin.php"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

              
            </nav>
        </div>
    </header>
    <!--    header ends  -->
        <!--    banner part starts   -->
    <div class="col-md-12 banner";>
    <span id="info1">Find a Blood Donor</span>
	<div id="info" class="col-md-12">

        <div class="wrap-contact100 button_home">
            <form autocomplete="off" action="seedonorsSearch.php" class="contact100-form validate-form" method="post">

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="bloodgroup" placeholder="Enter a Blood Group. eg: A+" required="" style="border: 2px solid lightblue;">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button name="submit-search" class="contact100-form-btn">See Donors</button>
                </div>  
                
            </form>
        </div>
	</div>
      
    </div>
        
        
        <!--    banner part ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>

<div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
  <div class="f_nav">
    <ul>
      <li class="active"><a href="index.php">Home</a></li>      
       <li ><a href="login.php">Log in</a></li>
        <li ><a href="registration.php">Become a donor</a></li>
        <li ><a href="send_req.php">Send Request for blood</a></li>
        <li ><a href="view_req.php">View Request</a></li>
        <li ><a href="search.php">Search for blood</a></li>
        <li ><a href="contact_us.php">Contact Us</a></li>
        <li ><a href="about_us.php">About Us</a></li>
      
            </ul>
  </div>
    <div class="copy">
      <p class="title"><br><br>©CSE327 Group Blood Moon  </p>
    </div>
  <div class="clear"></div>
</div>
</div>
</div>

</body>
</html>






<style>
  
.ftr-bg{
  background: #E9DCC9;
  border-top: 1px solid rgba(214, 195, 167, 0.34);
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
.footer{
  padding:3% 0;
}
.f_nav{
  float:left;
}
.f_nav li{
  display: inline-block;
}
.f_nav li.active a{
  color:#ffffff;
  background: rgb(219,60,76);
  background: -moz-linear-gradient(top,  rgba(219,60,76,1) 0%, rgba(197,54,68,1) 56%, rgba(162,44,56,1) 99%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(219,60,76,1)), color-stop(56%,rgba(197,54,68,1)), color-stop(99%,rgba(162,44,56,1)));
  background: -webkit-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -o-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -ms-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: linear-gradient(to bottom,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3c4c', endColorstr='#a22c38',GradientType=0 );
}
.f_nav li a{
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  display:block;
  padding: 8px 18px;
  color: #805752;
  font-size: 0.8125em;
}
.f_nav li a:hover{
  color:#ffffff;
  background: rgb(219,60,76);
  background: -moz-linear-gradient(top,  rgba(219,60,76,1) 0%, rgba(197,54,68,1) 56%, rgba(162,44,56,1) 99%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(219,60,76,1)), color-stop(56%,rgba(197,54,68,1)), color-stop(99%,rgba(162,44,56,1)));
  background: -webkit-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -o-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -ms-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: linear-gradient(to bottom,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3c4c', endColorstr='#a22c38',GradientType=0 );
  -webkit-transition: 0.9s;
  -moz-transition: 0.9s;
  -o-transition: 0.9s;
}







</style>
