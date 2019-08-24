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

                <div class="collapse navbar-collapse custom_nav" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seedonors.php">Manage All Donors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="showrequest.php">Manage Requested Bloods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find.php">Message</a>
                        </li>
                           <li class="nav-item">
                            <a class="nav-link" href="index.php">Log Out </a>
                        </li>
                    </ul>
                </div>
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
