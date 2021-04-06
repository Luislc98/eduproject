<!DOCTYPE html>
<html>
    <head>
        <?php  
        include("includes/links.php");
        include("includes/init.php");
        ?>
    <!--student stylesheet -->
        <link rel="stylesheet" href="styles/student.css">
        
    <!-- Sign up form stylesheet and google api-->
        <script src="https://apis.google.com/js/api:client.js"></script>
    </head>
    <body style="width: 100%; height: 100%;">
        <div class="wrapper" id="page-background">
            <?php  
            include("includes/sidebar.php");
            ?>
            <div>
                <?php
                    include("includes/navbar.php");
                    ?>
                <div class ="container-fluid">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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

        <?php
    include("includes/required_scripts.php");
    ?>
    </body>
</html>