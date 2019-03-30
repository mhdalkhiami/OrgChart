<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>


<div class="" >

	<div class="">

		<div class="card card-transparent" style="">
			<div class="card-header d-flex justify-content-left">
				<div class="card-title">
					<h5>
						Add Customer Data
					</h5>
				</div>
			</div>

			<div class="card-block d-flex justify-content-between">
				<div class="col-md-12" style="padding: 25px;">
					
					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Company Name
						</span>
						<input class="input-sm form-control" type="text">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Email Address
						</span>
						<input class="input-sm form-control" type="text">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Mobile Number
						</span>
						<input class="input-sm form-control" type="number">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Address
						</span>
						<input class="input-sm form-control" type="text">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Company ID
						</span>
						<input class="input-sm form-control" type="text">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Postal Code
						</span>
						<input class="input-sm form-control" type="number">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Company URL
						</span>
						<input class="input-sm form-control" type="text">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Package Code
						</span>
						<input class="input-sm form-control" type="text">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Status
						</span>
						<select class="input-sm form-control">
                                <option>
                                	Please select a status
                                </option>
                                <option>
                                	Active
                                </option>
                                <option>
                                	Test
                                </option>
                                <option>
                                	Pending
                                </option>
                            </select>
					</div>


					<div class="col-lg-12 mt-4 mobileNoPadding">
						<button class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" data-toggle="modal" data-target="#addData">Next</button>
					</div>
				</div>
			</div>
		</div>
		
		</div>
		
	</div>

		<!-- confirmation popout modal -->
	<div class="modal fade stick-up " id="addData" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content-wrapper">
				<div class="modal-content">
					<div class="modal-header clearfix text-left">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<i class="pg-close fs-18"></i>
						</button>
						<h5>
							Success
						</h5>
					</div>
					<div class="modal-body text-center">
						<h5>You had added new company data for Company sdn bhd.</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success btn-cons btnCustomWidth" onclick="window.location.href='dashboard.php'">
							OK
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footerDashboard.php'; ?>
<?php include 'sharejsDashboard.php'; ?>


</body>
</html>
