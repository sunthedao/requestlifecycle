<?php
// session_start();

?>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Hello</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Hey</a>
                    <a class="nav-item nav-link" href="#">My</a>
                    <a class="nav-item nav-link disabled" href="#">Friend</a>
                </div>
            </div>

            
            <!-- "ไม่มีการ Login" user_login -->
            <div class="text" >
            
                <?php echo isset($_SESSION['user_status']) ? "สวัสดีครับคุณ ".$_SESSION['user_status']." "."<a href='/phpOOP/public/logout.php' class='text-white'>".'LogOut'."</a>"  : "<a href='/phpOOP/public/login.php' class='text-white'>".'LogIn Here'."</a>" ?>
            </div>
        </nav>
    </div>
