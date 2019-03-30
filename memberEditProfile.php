<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderMember.php'; ?>

<!-- container-fluid -->
<div class="col-md-12" >

	<div class="">

		<div class="card card-transparent" style="">
			<div class="card-header d-flex justify-content-left">
				<div class="card-title">
					<h5>
						Edit Profile
					</h5>
				</div>
			</div>

			<div class="card-block d-flex justify-content-between">
				<div class="col-md-12" style="padding: 25px;">
					
					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Username
						</span>
						<input class="input-sm form-control" type="text" placeholder="Testaccount" disabled="">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							Mobile Number
						</span>
						<input class="input-sm form-control" type="number">
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							State / Province
						</span>
						<select class="input-sm form-control">
                                <option>
                                	Please select a state
                                </option>
                            </select>
					</div>

					<div class="col-lg-7 col-md-7 mt-3">
						<span>
							City
						</span>
						<select class="input-sm form-control">
                                <option>
                                	Please select a city
                                </option>
                            </select>
					</div>


					<div class="col-lg-12 mt-4 mobileNoPadding">
						<button class="btn btn-success btn-cons m-t-rem2 btnCustomWidth" data-toggle="modal" data-target="#editProfile">Next</button>
					</div>
				</div>
			</div>
		</div>
		
		</div>
		
	</div>

		<!-- confirmation popout modal -->
	<div class="modal fade stick-up " id="editProfile" tabindex="-1" role="dialog">
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
						<h5>Your profile had been updated successfully.</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success btn-cons btnCustomWidth" onclick="window.location.href='memberDashboard.php'">
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
