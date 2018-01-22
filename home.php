<head>
    <META CHARSET="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MANAGMENT SYSTEM</title>

    <!-- Bootstrap -->
    <link rel="icon" href="images/favicon.ico">
    <link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!---main css--->
    <?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
        echo '<link type="text/css" rel="stylesheet" media="all" href="/styles/stylesheet/mobile/mobile_home.css"/>';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="/styles/stylesheet/desktop/home.css">';
    };
    ?>

    <!--font awosome-->
    <link rel="stylesheet" type="text/css" href="styles/fonts/font-awesome-4.7.0/css/font-awesome.css">

    <script type="text/javascript">window.$crisp = [];
        window.CRISP_WEBSITE_ID = "694075d7-ef14-4b48-9480-acf9e1395554";
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();</script>
</head>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i style="font-size: 25px;" class="fa fa-arrow-up"
                                                                aria-hidden="true"></i></button>


<?php
include 'includes/layout/core/navbar_home.php';
?>

<section class="container banner">
    <div class="col-md-6 col-xs-12 col-sm-12">
        <div class="row">
            <div class="intro">
                <h1>Your Business. Your Clients.
                    One Free, Powerful Invoicing Platform.</h1>

                <button type="button" class="btn btn-block start-now">Start From Now &nbsp; <span
                            class="glyphicon glyphicon-chevron-right"></span></button>
            </div>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 ">
        <div class="row">

            <form action="sign_up.php" method="post" class="form">

                <div class="container_home_register">

                    <h3 style="text-align: center;">
                        <span class="top_register">
                            Register Here For Free
                        </span>
                    </h3>
                    <div class="form-group col-md-6 col-sm-12">
                        <input required="required" type="text" class="form-control" name="first"
                               placeholder="FIRST-NAME">

                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <input required="required" type="text" class="form-control" name="last" placeholder="LAST-NAME">

                    </div>

                    <div class="form-group col-md-12 col-sm-12 ">
                        <input required="required" type="email" class="form-control" name="uid" placeholder="E-mail">

                    </div>

                    <div class="form-group col-md-12 col-sm-12">
                        <input required="required" type="password" class="form-control" name="pwd"
                               placeholder="PASSWORD">

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                <button type="submit" class="button button1">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div style="clear: both"></div>
    <div style="background: white; padding: 10px; opacity: 0.75" class="banner_footer">

        <p style="text-align: center; color: #0f0f0f;">It's free get your first whatever &nbsp;
            <button type="button" class="btn home_btn">
                Register Now
            </button>
        </p>
    </div>
</section>


<section style="margin-bottom: 50px;" id="features" class="sections lightbg">
    <div class="container text-center">

        <div style="color: #ed7442;" class="heading-content">
            <h3 style="text-transform: uppercase;"><b>summarise the features</b></h3>
            <h5>summarise what your product is all about</h5>
        </div>

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-content">
                    <i class="fa fa-bookmark-o f_circel"></i>
                    <h5>Attractive Layout</h5>
                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam
                        elerisque mi id faucibus iaculis vitae pulvinar.</p>
                    <button type="button" class="btn home_btn">
                        Register Now
                    </button>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-content">
                    <i class="fa fa-tablet f_circel"></i>
                    <h5>Fresh Design</h5>
                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam
                        elerisque mi id faucibus iaculis vitae pulvinar.</p>
                    <button type="button" class="btn home_btn">
                        Register Now
                    </button>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-content">
                    <i class="fa fa-comments f_circel"></i>
                    <h5>Multipurpose</h5>
                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam
                        elerisque mi id faucibus iaculis vitae pulvinar.</p>
                    <button type="button" class="btn home_btn">
                        Register Now
                    </button>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-content">
                    <i class="fa fa-comment-o f_circel"></i>
                    <h5>Easy to customize</h5>
                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam
                        elerisque mi id faucibus iaculis vitae pulvinar.</p>
                    <button type="button" class="btn home_btn">
                        Register Now
                    </button>
                </div>
            </div>

        </div>
    </div> <!-- /container -->
</section>

<section class="plans">

</section>

<section style="background-color: white;" class="about_us">
    <div style="margin: 100px" class="container_about">
        <h1 style="text-transform: uppercase; text-align: center;padding: 20px">About Us</h1>
        <p style="text-align: center; padding: 20px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor
            vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae. Lorem ipsum dolor sit amet,
            consectetur consectetur adipiscing elit. felis dolor vitae. Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Mauris sagittis felis dolor vitae.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis felis dolor vitae. Lorem ipsum dolor
            sit amet, consectetur consectetur adipiscing elit. felis dolor vitae. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Mauris sagittis felis dolor vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Mauris sagittis felis dolor vitae.</p>
    </div>

</section>

<section class="contact_us">

</section>

<div class="footer">
    <?php
    include 'includes/layout/footer.php';
    ?>
</div>

