<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>


	<div class="col-md-12 mx-0">
		<div class="card card-transparent" style="">
			<div class="card-header d-flex justify-content-left">
				<div class="card-title">
					<h5>
						Customer Info                    
					</h5>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12" style="margin:20px 0px">
			<div class="row mx-0">
				<div class="col-12">
					<div class="row mx-0">
						<div class="col-lg-6 col-md-6 col-xs-12 mt-3">
						<span>
							Organiztion ID
						</span>
						<input class="input-sm form-control" type="password">
					</div>

					<div class="col-lg-6 col-md-6 col-xs-12 mt-3">
						<span>
							Company ID
						</span>
						<input class="input-sm form-control" type="password">
					</div>

					<div class="col-lg-6 col-md-6 col-xs-12 mt-3">
						<span>
							Name
						</span>
						<input class="input-sm form-control" type="password">
					</div>

					</div>
					<div class="col-md-12" align="left">
					<button class="btn btn-default btn-cons m-t-rem2">Clear</button>
					<button class="btn btn-success btn-cons m-t-rem2">Search</button>
				</div>
				</div>
			</div>
		</div>


		<div class="col-xs-12 col-sm-12 col-md-12" style="margin:20px 0px">
			<div class="row mx-0">
				<div class="col-12">
					<div class="row mx-0">
						<div class="col-md-12" align="right">
						<button type="button" class="btn btn-success" onclick="window.location.href='addCustomerData.php'">
							Add Customer Data
						</button>
					</div>
						<div class="table-responsive">
							<table class="table table-striped tableHeadCustom">
								<thead>
									<tr>
										<th>Organization ID</th>
										<th>Customer Name</th>
										<th>Email Address</th>
										<th>Handphone Number</th>
										<th>Address</th>
										<th>Company ID</th>
										<th>Postal Code</th>
										<th>Company URL</th>
										<th>Package Code</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>  
										<td>12345</td>
										<td>Olson</td>
										<td>olson@gmail.com</td>
										<td>01234556</td>
										<td>98 Jalan teknologi</td>
										<td>1344</td>
										<td>47180</td>
										<td>test.com</td>
										<td>bisston111</td>
										<td class="activate">ACTIVE</td>
										<td><button class="btn btn-success" onclick="window.location.href='editCustomerData.php'">Edit</button></td>
										<td><button class="btn btn-default">Delete</button></td>
									</tr>

									<tr>  
										<td>12345</td>
										<td>Olson</td>
										<td>olson@gmail.com</td>
										<td>01234556</td>
										<td>98 Jalan teknologi</td>
										<td>1344</td>
										<td>47180</td>
										<td>test.com</td>
										<td>bisston111</td>
										<td class="testing">TEST</td>
										<td><button class="btn btn-success" onclick="window.location.href='editCustomerData.php'">Edit</button></td>
										<td><button class="btn btn-default">Delete</button></td>
									</tr>

									<tr>  
										<td>12345</td>
										<td>Olson</td>
										<td>olson@gmail.com</td>
										<td>01234556</td>
										<td>98 Jalan teknologi</td>
										<td>1344</td>
										<td>47180</td>
										<td>test.com</td>
										<td>bisston111</td>
										<td class="noActive">PENDING</td>
										<td><button class="btn btn-success" onclick="window.location.href='editCustomerData.php'">Edit</button></td>
										<td><button class="btn btn-default">Delete</button></td>
									</tr>

									<tr>  
										<td>12345</td>
										<td>Olson</td>
										<td>olson@gmail.com</td>
										<td>01234556</td>
										<td>98 Jalan teknologi</td>
										<td>1344</td>
										<td>47180</td>
										<td>test.com</td>
										<td>bisston111</td>
										<td class="noActive">PENDING</td>
										<td><button class="btn btn-success" onclick="window.location.href='editCustomerData.php'">Edit</button></td>
										<td><button class="btn btn-default" data-toggle="modal" data-target="#deleteData">Delete</button></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="modal fade stick-up " id="deleteData" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md">
			<div class="modal-content-wrapper">
				<div class="modal-content">
					<div class="modal-header clearfix text-left">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<i class="pg-close fs-18"></i>
						</button>
						<h5>
							Delete Customer Data
						</h5>
					</div>
					<div class="modal-body text-center">
						<h5>Are you sure want to delete this customer data?</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-cons btnCustomWidth" data-dismiss="modal">
							Cancel
						</button>
						<button type="button" class="btn btn-success btn-cons btnCustomWidth" onclick="window.location.href='dashboard.php'">
							Delete
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php include 'sharejsDashboard.php'; ?>
<!-- <?php include 'footerDashboard.php'; ?> -->

</body>
</html>
