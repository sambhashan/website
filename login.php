<?php session_start(); ?>
<?php include 'includes/layout/header.php'; ?>



    <div class="header_overlay">
        <div  style="margin-bottom: 170px;" class="col-sm-6 col-sm-offset-3 register">
            <h1 style="text-align: center">login</h1>
            <br>
            <form action="log_in.php" method="post" class="form">
                <div class="form-group col-md-12 col-sm-12 ">
                    <input type="text" class="form-control"  name="uid" placeholder="USER-NAME">
                </div>

                <div class="form-group col-md-12 col-sm-12">
                     <input type="password" class="form-control"  name="pwd" placeholder="PASSWORD">
                </div>

                <p style="color: red; text-align: center">
                    <?php echo $_SESSION['message']; ?>
                    <?php echo $_SESSION['error_msg']; ?>
                </p>
                <div style="color: black" class="form-group col-md-12 col-sm-12">
                    <input type="checkbox" name="remember_me"  value="1" id="remember_me">
                    Remember me
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <button type="submit"  name="submit" class="button button1">SIGN IN</button>
                        </div>
                    </div>
                </div>
                <hr>
                <h3 style="text-align: center;">
                    <a style=" text-decoration: none" href="register.php">Sign Up here</a>
                </h3>


                <?php session_unset(); ?>
            </form>

        </div>
    </div>


<?php
include 'includes/layout/footer.php';
