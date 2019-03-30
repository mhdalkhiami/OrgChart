<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<div class="login-wrapper">

	<div class="row m-0 justify-content-center">
		<div class="col-lg-6 col-md-8 p-t-rem5">
			<div class="col-md-12"align="center">
            <a href="login.php"><img src="images/companyLogo.png" style="width:200px"></a>
        </div>

			<div class="col-md-12" align="center">
			 <h4 class="mainText"><b>SIGN UP</b></h4>
			</div>
			<div class="col-md-12" style="padding: 2rem;">
				<form>
					
					<p style="font-weight: bold">Account Information</p>
					<div class="m-b-rem1 mt-4">
						<label>
							Username
							<span class="text-danger">*</span>
						</label>
						<div class="m-b-rem1">
							<input type="text" class="form-control form-controlCustom" maxlength="225" require="">
						</div>
					</div>

					<div class="m-b-rem1 mt-4">
						<label>
							Mobile Number<span class="text-danger">*</span>
						</label>
						<div class="row m-0">
							<div class="col-md-3 r-p-0 m-b-rem1 pl-0">
								<select class="form-control form-controlCustom">
		                            <option>+60</option>
		                        </select>
		                    </div>
		                    <div class="col-md-9 r-p-0 m-b-rem1 pr-0" style="display: inline;">
								<div class="input-group" style="padding-right: 0px;">
									<input type="text" class="form-control form-controlCustom">
								</div>
							</div>
						</div>
					</div>
					
					<div class="m-b-rem1">
						<label>
							State/Province
						</label>
						<div>
							<select class="form-control form-controlCustom">
                                <option>
                                	Please select a state
                                </option>
                            </select>
						</div>
					</div>
					<div class="m-b-rem1">
						<label>
							City
						</label>
						<div>
							<select class="form-control form-controlCustom">
                                <option>
                                	Please select a city
                                </option>
                            </select>
						</div>
					</div>
				
					<div class="m-b-rem1 mt-4">
						<label>
							Password
							<span class="text-danger">*</span>
						</label>
						<div class="m-b-rem1">
							<input type="password" class="form-control form-controlCustom" maxlength="20">
								Password must contain 6 - 20 characters, which consists of letters and numbers.
							</span>
						</div>
					</div>

					<div class="m-b-rem1 mt-4">
						<label>
							Retype Password
							<span class="text-danger">*</span>
						</label>
						<div class="m-b-rem1">
							<input type="password" class="form-control form-controlCustom" maxlength="20" require="">
						</div>
					</div>

					</form>
					<div class="col-md-12" align="center">
						<button class="btn btn-default btn-cons m-t-rem2 btnCustomWidth" onclick="window.location.href='login.php'">Back</button>
						<button class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" data-toggle="modal" data-target="#publicRegistrationConfirm">Confirm</button>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footerLogin.php'; ?>
</div>
<!-- end login -->

<!-- confirmation popout modal -->
<div class="modal fade stick-up " id="publicRegistrationConfirm" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md">
		<div class="modal-content-wrapper">
			<div class="modal-content">
				<div class="modal-header clearfix text-left">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<i class="pg-close fs-18"></i>
					</button>
					<h5>
						Confirmation
					</h5>
				</div>
				<div class="modal-body">
                    <div class="table-responsive" style="border: none;">
	                    <table class="table" style="border: 1px solid #dddddd;">
	                    	<tbody>
	                    		<tr>
	                                <th>
	                                	Username
	                                </th>
	                                <td>Test account</td>
	                            </tr>

	                            <tr>
	                                <th>
	                                	Mobile Number
	                                </th>
	                                <td>60123456778</td>
	                            </tr>
	                            
	                            <tr>
	                                <th>
	                                	State/Province
	                                </th>
	                                <td>Selangor</td>
	                            </tr>
	                            <tr>
	                                <th>
	                                	City
	                                </th>
	                                <td>Petaling Jaya</td>
	                            </tr>
	                        </tbody>
	                    </table>
	                </div>
				</div>
				<div class="modal-footer pt-3">
					<button type="button" class="btn btn-default btn-cons m-t-rem2 btnCustomWidth" data-dismiss="modal" >
						Cancel
					</button>
					<button type="button" class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" onclick="window.location.href='successful.php'">
						Confirm
					</button>
				</div>
			</div>
		</div>
	</div>
	</div>

<?php include 'sharejsDashboard.php'; ?>
</body>
</html>