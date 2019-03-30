
<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>



<div class="col-md-12">
	<div class="row text-white mx-0 mt-2" >
		<div class="col-md-12 col-sm-12 col-12 boxMain">

      <h5 class="mainText popup">
        My SOP List<i class="fa fa-info-circle" style="margin-left:10px" onclick="myFunction()"></i>
        <span class="popuptext" id="myPopup">Drag your task list to right</span>
      </h5>

      <div class="row mx-0" style="margin-top:20px">

        <div class="col-md-6 userProfile2" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
          <div class="col-md-12" align="center" style="margin:20px 0px">
            <h5 class="mainText">
             Master task list
           </h5>
         </div>
         <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag1">Prepare quotation</h5>
        </div>

        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag2">Monthly Sales report</h5>
        </div>

        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag3">Collect report</h5>
        </div>

        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag4">Sales meeting</h5>
        </div>
        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag4">Sales training</h5>
        </div>

        <div class="col-md-12" align="right">
          <button class="btn btn-success" onclick="window.location.href='searchOption.php'">Add task<i class="fa fa-plus-circle" style="margin-left:10px"></i></button>
        </div>

      </div>
      <div class="col-md-6 userProfile2" style="background:unset" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
        <div class="col-md-12" align="center" style="margin:20px 0px">
            <h5 class="mainText">
             Drop your tasks here
           </h5>
         </div>
        <div class="col-md-12" align="right">
          <button class="btn btn-success" onclick="window.location.href='SOPFlowchart.php'">Next<i class="fa fa-arrow-right" style="margin-left:10px"></i></button>
        </div>
        
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

<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</body>
</html>