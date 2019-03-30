<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>

<div class="login-wrapper">

    <div class="row m-0 justify-content-center">
        <div class="col-md-12" align="center" style="padding-top:100px">

            <div class="block successBlock" align="center">
             <h3 class="mainText" style="margin:20px 0px"><b>2 Way Authentication</b></h3>
             <p><b>A OTP (One Time Passcode) has been sent to 601234567</b></p>
             <p>Please enter the OTP below to verify your account</p>

             <form>
                <div class="form-group form-group-default form-group-custom" style="border: none!important; position: relative;">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="number" id="example-input1-group1" name="example-input1-group1" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="col-md-12" align="center">
                <button class="btn btn-default btn-cons m-t-rem2 btnCustomWidth" onclick="window.location.href='login.php'">Back</button>
                <button class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" data-toggle="modal" data-target="#verify">Verify</button>
            </div>
        </div>
    </div>
</div>
</div>  

<!-- confirmation popout modal -->
<div class="modal fade stick-up " id="verify" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content-wrapper">
            <div class="modal-content">
                <div class="modal-header clearfix text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="pg-close fs-18"></i>
                    </button>
                    <h5>
                        Verification Successful
                    </h5>
                </div>
                <div class="modal-body" align="center">
                    <p><b>Thank you for verifying your OTP Passcode.</b></p>
                    <p>You can now sign in with your Bisston account.</p>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success btn-cons btnCustomWidth" onclick="window.location.href='dashboard.php'">
                        Get started
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end login -->

<?php include 'sharejsDashboard.php'; ?>
</body>
</html>