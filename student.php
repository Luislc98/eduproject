<!DOCTYPE html>
<html>
    <head>
        <?php  
        include("includes/links.php");
        include("includes/init.php");
        ?>
    <!--Homepage stylesheet -->
        <link rel="stylesheet" href="styles/student_home.css">
        
    <!-- Sign up form stylesheet and google api-->
        <script src="https://apis.google.com/js/api:client.js"></script>
    </head>
    <body>
        <div class= "wrapper" id="homepage-background">
        <?php  
            include("includes/sidebar.php");
            ?>
            <div>
                <?php
                    include("includes/navbar.php");
                    ?>
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    <div style="background-color: white;" class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>

                    <div style="background-color: white;" class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    
                    <div id="overview" class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    <div style="background-color: white;" class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of three columns</span>
                        </div>
                    </div>
                    <?php  
                        include("includes/footer.php");
                        ?>
                </div>
               
            </div>
      
        </div>

        <!-- Required jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!--Navbar and sidebar javascript -->
        <script src="script/navbar_sidebar.js"></script>
    </body>
</html>