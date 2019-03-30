<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<div class="login-wrapper">

    <div class="row m-0 mb-5">

        <div class="col-md-12 loginLang">
            <div class="loginInfo">
            </div>
        </div>

        <div class="col-md-6 col-xs-12" align="center">
            <a href="login.php"><img class="logoSize" src="images/companyLogo.png"></a>
        </div>

        <div class="col-md-6 col-xs-12 contentCustom">

            <div align="center">
                <div class="widthCustom2">

                    <div class="">
                        <form class="loginFormCustom" method="POST" id="form1">

                            <div class="form-group form-group-default form-group-custom" style="border: none!important; position: relative;">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group-default form-group-custom" style="border: none!important; position: relative;">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group-default form-group-custom" style="border: none!important; position: relative;">
                                <div class="form-group">
                                    <div class="col-md-12" style="margin-top:10px">
                                            <select class="input-sm form-control" style="border-bottom: 1px solid #24397c;">
                                                <option>
                                                    Select option to send your pin number
                                                </option>
                                                <option>
                                                    Email
                                                </option>
                                                <option>
                                                    OTP Code
                                                </option>
                                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="loginFormBtnGroup">
                                <div class="slide-submit themeBtn">
                                    <div class="slide-submit-text">Slide To Submit</div>
                                    <div class="slide-submit-thumb">»</div>
                                </div>
                            </div>

                            <div class="col-md-12 row mx-0">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
                                    <a href="forgotPassword.php" class="forgotPassword">Forgot password?</a>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 hidden-xs hidden-sm">
                                    <a href="publicRegistration.php" class="signUp">Sign Up<i class="fa fa-long-arrow-right"></i></a>
                                </div>

                                <div class="col-md-12" style="padding-top:20px"><a href="publicRegistration.php" class="phoneSign" >Not Member? Sign Up Here <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footerLogin.php'; ?>

</div>


<!-- end login -->

<?php include 'sharejsDashboard.php'; ?>
<script src="js.code.js"></script>
<script src="js/slide-to-submit.js"></script>
<script>
    $('.slide-submit').slideToSubmit({
        submitDelay: 1000,
        successText: 'Login Success!'
    });
    
    // Demo only
    $("#form1").submit(function(e) {
        e.preventDefault();
        $('#form1').slideUp();
    });
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (
    function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })
  ();

</script>
</body>
</html>