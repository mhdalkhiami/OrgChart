<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>


<div class="login-wrapper">

	<div class="col-md-12" align="center" style="padding-top:100px">

		<div class="block successBlock" align="center">
			<i class="fa fa-check-circle fa-5x" style="color:#2fca24"></i>
			<h4 class="mainText"><b>Registration Successful</b></h4>
			<p><b>Thank you for registration at Bisston!</b></p>
			<p>Your personal verification code has been sent to your email address</p>
			<button type="button" class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" onclick="window.location.href='login.php'">
				Log In
			</button>
		</div>
	</div>
</div>	

<?php include 'sharejsDashboard.php'; ?>
</body>
</html>
