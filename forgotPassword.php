<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>

<div class="login-wrapper">

	<div class="row m-0 justify-content-center">
		<div class="col-lg-6 col-md-8 p-t-rem4">

			<div class="col-md-12"align="center">
				<a href="login.php"><img src="images/companyLogo.png" style="width:200px"></a>
			</div>

			<div class="col-md-12" align="center">
				<h4 class="mainText"><b>FORGOT PASSWORD</b></h4>
			</div>
			<div class="col-md-12" style="padding: 2rem;">
				<form>
					<div class="m-b-rem1 mt-4">
						<label>
							Email
							<span class="text-danger">*</span>
						</label>
						<div class="m-b-rem1">
							<input type="text" class="form-control form-controlCustom" maxlength="225" required/>
						</div>
					</div>

					<div class="m-b-rem1 mt-4">
						<label>
							New Password
							<span class="text-danger">*</span>
						</label>
						<div class="m-b-rem1">
							<input type="password" class="form-control form-controlCustom" maxlength="225" required/>
						</div>
					</div>

					<div class="m-b-rem1 mt-4">
						<label>
							Retype Password
							<span class="text-danger">*</span>
						</label>
						<div class="m-b-rem1">
							<input type="password" class="form-control form-controlCustom" maxlength="225" required/>
						</div>
					</div>
				</form>

				<div class="col-md-12" align="center">
					<button class="btn btn-default btn-cons m-t-rem2 btnCustomWidth" onclick="window.location.href='login.php'">Back</button>
					<button class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" data-toggle="modal" data-target="#confirmation">Confirm</button>
				</div>
			</div>
		</div>
	</div>

	<!-- confirmation popout modal -->
	<div class="modal fade stick-up " id="confirmation" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content-wrapper">
				<div class="modal-content">
					<div class="modal-header clearfix text-left">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<i class="pg-close fs-18"></i>
						</button>
						<h5>
							Reset Password
						</h5>
					</div>
					<div class="modal-body text-center">
						<p>An email confirmation was sent to test**@gmail.com</p>
						<p>Follow the instruction in the email to reset your password</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success btn-cons btnCustomWidth">
							Go to your email
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footerLogin.php'; ?>

</div>	
<!-- end login -->

<?php include 'sharejsDashboard.php'; ?>
</body>
</html>