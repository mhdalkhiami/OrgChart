
<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>



<div class="col-md-12">
	<div class="row text-white mx-0 mt-2" >
		<div class="col-md-12 col-sm-12 col-12 boxMain">

      <h5 class="mainText popup">
        My SOP Flow<i class="fa fa-info-circle" style="margin-left:10px" onclick="myFunction()"></i>
        <span class="popuptext" id="myPopup">Check your SOP flow</span>
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

        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag4">Sales training</h5>
        </div>

        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag4">Sales training</h5>
        </div>

        <div class="col-md-12">
          <h5 class="dragFunction" draggable="true" ondragstart="drag(event)" id="drag4">Sales training</h5>
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
             Your tasks flow
           </h5>
         </div>

        <div class="col-md-12 flowchart-box" data-toggle="modal" data-target="#flow1" style="margin:20px 0px">
          Done to collect data from company A?
        </div>

          <div class="col-md-12" align="center" style="margin:10px 0px">
           <span class="iconFlow"><i class="fa fa-long-arrow-down"></i></span>
          </div>

          <div class="col-md-12 flowchart-box" align="center" data-toggle="modal" data-target="#flow2">
          Classified Data
        </div>

        <div class="col-md-12" align="center" style="margin:10px 0px">
           <span class="iconFlow"><i class="fa fa-long-arrow-down"></i></span>
          </div>

          <div class="col-md-12 flowchart-box" align="center" data-toggle="modal" data-target="#flow3">
          Process
        </div>

        <div class="col-md-12" align="center" style="margin:10px 0px">
           <span class="iconFlow"><i class="fa fa-long-arrow-down"></i></span>
          </div>

          <div class="col-md-12 flowchart-box" align="center" data-toggle="modal" data-target="#flow3">
          Process
        </div>

        <div class="col-md-12" align="center" style="margin:10px 0px">
           <span class="iconFlow"><i class="fa fa-long-arrow-down"></i></span>
          </div>

          <div class="col-md-12 flowchart-box" align="center" data-toggle="modal" data-target="#flow3">
          Process
        </div>

        
        <div class="col-md-12" align="center" style="margin:10px 0px">
           <span class="iconFlow"><i class="fa fa-long-arrow-down"></i></span>
          </div>

          <div class="col-md-12 flowchart-box-done" align="center">
          Congragulations! Your tasks had done! Please proceed to next tasks.
        </div>

        <div class="col-md-12" align="right">
          <button class="btn btn-success" data-toggle="modal" data-target="#tasks">Next<i class="fa fa-arrow-right" style="margin-left:10px"></i></button>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!-- end container-fluid -->

<div class="modal fade stick-up " id="flow1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content-wrapper">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close fs-18"></i>
            </button>
            <h5>
              Step 1
            </h5>
          </div>
          <div class="modal-body text-center">
            <h5>Check CRM system and quotation need to follow up.</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success btn-cons btnCustomWidth" data-dismiss="modal">
              OK
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade stick-up " id="flow2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content-wrapper">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close fs-18"></i>
            </button>
            <h5>
              Step 2
            </h5>
          </div>
          <div class="modal-body text-center">
            <h5>Follow up one week pass questions.</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success btn-cons btnCustomWidth" data-dismiss="modal">
              OK
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade stick-up " id="flow3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content-wrapper">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close fs-18"></i>
            </button>
            <h5>
              Step 3
            </h5>
          </div>
          <div class="modal-body text-center">
            <h5>Call customer and wait for the feedback.</h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success btn-cons btnCustomWidth" data-dismiss="modal">
              OK
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade stick-up " id="tasks" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content-wrapper">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close fs-18"></i>
            </button>
            <h5>
              Choose your tasks mode
            </h5>
          </div>
          <div class="modal-body text-center">
            <div class="col-md-12 row">
            <div class="col-md-6 col-xs-12" style="margin:10px 0px">
              <button type="button" class="btn btn-success btn-cons btnCustomWidth">
              Daily
            </button>
            </div>
            <div class="col-md-6 col-xs-12"  style="margin:10px 0px">
              <button type="button" class="btn btn-success btn-cons btnCustomWidth">
              Weekly
            </button>
            </div>

            <div class="col-md-6 col-xs-12"  style="margin:10px 0px">
              <button type="button" class="btn btn-success btn-cons btnCustomWidth">
              Yearly
            </button>
            </div>

            <div class="col-md-6 col-xs-12"  style="margin:10px 0px">
              <button type="button" class="btn btn-success btn-cons btnCustomWidth">
              Monthly
            </button>
            </div>

            <div class="col-md-6 col-xs-12"  style="margin:10px 0px">
              <button type="button" class="btn btn-success btn-cons btnCustomWidth">
              Others
            </button>
            </div>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-cons btnCustomWidth" onclick="window.location.href='doneSOP.php'">
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