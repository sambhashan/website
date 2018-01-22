<?php
session_start();
?>
<?php
include 'includes/layout/header.php';

?>



<div class="header_overlay">
    <div style="margin-bottom: 170px;" class="col-sm-6 col-sm-offset-3 register">
        <h1 style="text-align: center">Register For Free</h1>
        <br>
        <form action="sign_up.php" method="post" class="form">
            <div class="form-group col-md-12 col-sm-12">
                <input required="required" type="text" class="form-control" name="first" placeholder="FIRST-NAME">
            </div>

            <div class="form-group col-md-12 col-sm-12">
                <input required="required" type="text" class="form-control" name="last" placeholder="LAST-NAME">
            </div>

            <div class="form-group col-md-12 col-sm-12 ">
                <input required="required" type="email" class="form-control" name="uid" placeholder="E-mail">
            </div>

            <div class="form-group col-md-12 col-sm-12">
                <input required="required" type="password" class="form-control" name="pwd" ID="password"
                       placeholder="PASSWORD">
            </div>

            <div class="form-group col-md-12 col-sm-12">
                <input required="required" type="password" class="form-control" name="pwd_2" id="confirm-password"
                       placeholder="CONFIRM-PASSWORD">
                <span class="pass_match" style="display: none; color: red">Password Is Not Matched</span>
                <span style="color: red; text-align: center;">

                    <?php echo $_SESSION['error_empty']; ?>

                    <?php echo $_SESSION['error_exist']; ?>
                </span>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <button type="submit" id="btnSubmit" class="button button1">REGISTER</button>
                    </div>
                </div>
            </div>
            <hr>
            <h3 style="text-align: center;">
                <a style=" text-decoration: none" href="login.php">Already login?</a>
            </h3>

        </form>

    </div>
</div>
<?php
include 'includes/layout/footer.php';
?>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm-password").val();
            if (password != confirmPassword) {
                $(".pass_match").css("display", "block")
                return false;
            }
            return true;
        });
    });
</script>
