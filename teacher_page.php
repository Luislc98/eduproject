<!DOCTYPE html>
<html>
    <head>
        <?php  
        include("includes/links.php");
        include("includes/init.php");
        ?>
    <!--teacher stylesheet -->
        <link rel="stylesheet" href="styles/teacher.css">
        
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
                    <p>ng essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <div class="row align-items-center">
                        <div class="col">
                            <span>One column</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One column</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One column</span>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of two columns</span>
                        </div>
                        <div class="col">
                            <span>One of two columns</span>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of two columns</span>
                        </div>
                        <div class="col">
                            <span>One of two columns</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One of two columns</span>
                        </div>
                        <div class="col">
                            <span>One of two columns</span>
                        </div>
                    </div>
                    
                    <div id="overview" class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One column</span>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <span>One column</span>
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