<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>


<div class="" >

	<div>

		<div class="card card-transparent" style="">
			<div class="card-header d-flex justify-content-left">
				<div class="card-title">
					<h5>
						Organization Chart
					</h5>
				</div>
			</div>

		</div>

    <div class="content">
      <figure class="org-chart cf">
        <ul class="administration">
          <li>					
            <ul class="director">
              <li>

                <a href="#" data-toggle="modal" data-target="#show"><span>
                 <img class="icon" src="images/ninjaAvatar.png">Director</span></a>
                 <ul class="subdirector">
                  <li><a href="#"><span><img class="icon" src="images/spiderAvatar.png">Assistant</span></a></li>
                </ul>
                <ul class="departments cf">								
                  <li><a href="#"><span><img class="icon" src="images/thiefAvatar.png">Admin</span></a></li>

                  <li class="department dep-a">
                    <a href="#"><span><img class="icon" src="images/hackerAvatar.png">Department A</span></a>
                    <ul class="sections">
                      <li class="section"><a href="#"><span><img class="icon" src="images/hackerAvatar.png">Section A1</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/hackerAvatar.png">Section A2</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/hackerAvatar.png">Section A3</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/hackerAvatar.png">Section A4</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/hackerAvatar.png">Section A5</span></a></li>
                    </ul>
                  </li>
                  <li class="department dep-b">
                    <a href="#"><span><img class="icon" src="images/ghostAvatar.png">Department B</span></a>
                    <ul class="sections">
                      <li class="section"><a href="#"><span><img class="icon" src="images/ghostAvatar.png">Section B1</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/ghostAvatar.png">Section B2</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/ghostAvatar.png">Section B3</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/ghostAvatar.png">Section B4</span></a></li>
                    </ul>
                  </li>
                  <li class="department dep-c">
                    <a href="#"><span><img class="icon" src="images/robotAvatar.png">Department C</span></a>
                    <ul class="sections">
                      <li class="section"><a href="#"><span><img class="icon" src="images/robotAvatar.png">Section C1</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/robotAvatar.png">Section C2</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/robotAvatar.png">Section C3</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/robotAvatar.png">Section C4</span></a></li>
                    </ul>
                  </li>
                  <li class="department dep-d">
                    <a href="#"><span><img class="icon" src="images/warriorAvatar.png">Department D</span></a>
                    <ul class="sections">
                      <li class="section"><a href="#"><span><img class="icon" src="images/warriorAvatar.png">Section D1</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/warriorAvatar.png">Section D2</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/warriorAvatar.png">Section D3</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/warriorAvatar.png">Section D4</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/warriorAvatar.png">Section D5</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/warriorAvatar.png">Section D6</span></a></li>
                    </ul>
                  </li>
                  <li class="department dep-e">
                    <a href="#"><span><img class="icon" src="images/vampireAvatar.png">Department E</span></a>
                    <ul class="sections">
                      <li class="section"><a href="#"><span><img class="icon" src="images/vampireAvatar.png">Section E1</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/vampireAvatar.png">Section E2</span></a></li>
                      <li class="section"><a href="#"><span><img class="icon" src="images/vampireAvatar.png">Section E3</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>	
          </li>
        </ul>			
      </figure>
    </div>
  </div>
</div>

<div class="modal fade stick-up " id="show" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content-wrapper">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close fs-18"></i>
            </button>
            <h5>
              Customer Information
            </h5>
          </div>
          <div class="modal-body text-center row">
            <div class="col-md-6 imageBox" align="center">
              <img class="icon2" src="images/ninjaAvatar.png">
              <div class="col-md-12" align="center">
               <button type="button" class="btn btn-default placeImage">
              Change Image
            </button>
          </div>
            </div>
            <div class="col-md-6" style="margin:20px 0px">
              <div class="col-md-12">
            <input class="input-sm form-control" type="text" disabled="" value="John Lee">
          </div>
          <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" disabled="" value="JohnLee@gmail.com">
          </div>
          <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" placeholder="Mobile Number">
          </div>
           <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" placeholder="Company Name">
          </div>
          <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" placeholder="Company ID">
          </div>
          <button type="button" class="btn btn-success placeImage" onclick="window.location.href='organizationChart.php'">
              Save Changes
            </button>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- <?php include 'footerDashboard.php'; ?> -->
<?php include 'sharejsDashboard.php'; ?>


</body>

