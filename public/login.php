<?php
session_start();
require(__DIR__ . '/../database/connect.php');

$connection = DB();


if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * from users WHERE username = '$username' and password = '$pass'";
    $sqlqr = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($sqlqr);

    if (mysqli_num_rows($sqlqr) > 0){
        if ($username == $row['username'] && $pass == $row['password']){
                $_SESSION['user_login'] = $row['id'];
                $_SESSION['user_status'] = $row['status'];
                $loginMsg = "Successfully Login";
                // echo $row['id'];
                header("refresh:1;index.php");
        }
    }
}
?>

<?php include('./../view/header.php'); ?>
<style>
    #content {
        width: 400px;
        margin: 0 auto;
        margin-top: 150px;
        /* margin-left: 20px; */
    }
</style>

<body>

    <div class="container" id="content">

        <form action="#" method="POST">
            <?php
            if (isset($loginMsg)) {
            ?>
                <div class="container" style="width: 30rem;">
                    <div class="alert alert-primary text-center" role="alert">
                        <?php echo $loginMsg; ?>                  
                    </div>
                </div>
            <?php } ?>
            <div class="card mt-5" style="width: 30rem;">
                <div class="card-header bg-info">
                    <h5 class="text-center">Login Form</h5>
                </div>

                <div class="card-body">
                    <div class="input-group mb-3">
                        <!-- <label for="username" class="mt-1">username</label> -->
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"> username</i></span>
                        </div>
                        <input type="text" class="form-control" id="user" name="user" required>

                    </div>



                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-key"> Password </i> </span>
                        </div>
                        <input type="password" class="form-control" id="pass" name="pass" required>
                    </div>

                    <!-- <input type="submit" class="btn btn-primary float-right" id="login" name="login"> -->

                    <button type="submit" name="login" id="login" class="btn btn-primary" style="float: right;">Login</button>



                </div>
            </div>
        </form>
    </div>
    <!-- end container -->
</body>

</html>