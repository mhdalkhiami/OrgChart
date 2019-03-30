<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>

<!-- container-fluid -->
<div class="col-md-12" >

	<div class="">

		<div class="card card-transparent" style="">
			<div class="card-header d-flex justify-content-left">
				<div class="card-title">
					<h5>
						Check your tasks details
					</h5>
				</div>
			</div>

			<div class="">
				<div class="col-md-12 row">

					<div class="col-lg-4 col-md-4 mt-3">
						<div class="col-md-12 imageBox" align="center">
							<img class="icon2" src="images/ninjaAvatar.png">
							<div class="col-md-12" align="center">
								<button type="button" class="btn btn-default placeImage">
									Change Image
								</button>
							</div>
						</div>

						
						<div class="col-lg-12 col-md-12 mt-3">
							<span>
								Join Date
							</span>
							<h5>2019-01-01</h5>
						</div>
					</div>
					
					<div class="col-lg-8 col-md-8 col-xs-12 mt-3">
						
						<!-- Tab links -->
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'userDetails')" id="defaultOpen">Personal Details</button>
							<button class="tablinks" onclick="openCity(event, 'tasksList')">Tasks List</button>
							
						</div>

						<!-- Tab content -->
						<div id="userDetails" class="tabcontent">
							<div class="col-lg-12 col-md-12">
								<span>
									Username
								</span>
								<h5 class="flowchart-line">John Lee</h5>
							</div>

							<div class="col-lg-12 col-md-12 mt-3">
								<span>
									Mobile Number
								</span>
								<h5 class="flowchart-line">0123-2092111</h5>
							</div>

							<div class="col-lg-12 col-md-12 mt-3">
								<span>
									Position
								</span>
								<h5 class="flowchart-line">HR Manager</h5>
							</div>

							<div class="col-lg-12 col-md-12 mt-3">
								<span>
									Group
								</span>
								<h5 class="flowchart-line">Executive CEO</h5>
							</div>

							<div class="col-lg-12 col-md-12 mt-3">
								<span>
									Email
								</span>
								<h5 class="flowchart-line">john@gmail.com</h5>
							</div>

						</div>

						<div id="tasksList" class="tabcontent">
							<div class="col-md-8">
								<h5 class="dragFunction">Individual tasks</h5>
						</div>

						<div class="col-md-8">
								<h5 class="dragFunction">Individual tasks</h5>
						</div>

						<div class="col-md-8">
								<h5 class="dragFunction">Individual tasks</h5>
						</div>

						<div class="col-md-8">
								<h5 class="dragFunction">Individual tasks</h5>
						</div>

						<div class="col-md-8">
								<h5 class="dragFunction">Individual tasks</h5>
						</div>

						
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
					<button type="button" class="btn btn-success btn-cons btnCustomWidth" onclick="window.location.href='dashboard.php'">
						OK
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <?php include 'footerDashboard.php'; ?> -->
<?php include 'sharejsDashboard.php'; ?>

<script>

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
	function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
  	tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
  	tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
