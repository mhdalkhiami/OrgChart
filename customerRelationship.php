
<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>



<div class="col-md-12">
	<div class="row text-white mx-0 mt-2" >
		<div class="col-md-12 col-sm-12 col-12 boxMain">
			<h5 class="mainText">
				Choose Your Customer Information
			</h5>
			<div class="row m-0">
				<div class="col-md-6 userProfile" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
          <div class="col-md-12">
            <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag1">View Customer Profile</h5>
          </div>

          <div class="col-md-12">
            <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag2">Monthly Existing Customer Info</h5>
          </div>

          <div class="col-md-12">
            <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag3">Add Customer Data</h5>
          </div>

          <div class="col-md-12">
            <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag4">Delete Customer Data</h5>
          </div>

        </div>
        <div class="col-md-6 userProfile" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
          <div class="col-md-12">
          
        </div>
        <button class="btn btn-success" onclick="window.location.href='searchOption.php'">Next</button>
        </div>

			</div>
		</div>
</div>
</div>
<!-- end container-fluid -->


<!-- <?php include 'footerDashboard.php'; ?> -->
<?php include 'sharejsDashboard.php'; ?>

<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drag2(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drag3(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drag4(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>

</body>
</html>