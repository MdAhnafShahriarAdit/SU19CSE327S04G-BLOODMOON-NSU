<?php

  include "header.php";

?>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    
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


<?php

  include "footer.php";

?>

</html>
