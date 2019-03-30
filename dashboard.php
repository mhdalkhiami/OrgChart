
<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>


<!-- container-fluid -->
<div class="container-fluid">
	<div class="row text-white mx-0 mt-2" >
		<div class="col-md-12 col-sm-12 col-12 boxMain">
			<h5 class="mainText">
				Overview
			</h5>
			<div class="row m-0">
				<div class="col-md-3 col-xs-12 pl-0">

					<div class="userProfile">

						<div class="iconMain">
							<i class="fa fa-comments"aria-hidden="true"></i>
							<h2 class="textNumber">21</h2>
							<p class="title">New Commercial</p>
						</div>

					</div>
				</div>
				<div class="col-md-3 col-xs-12 pl-0">
					<div class="userProfile">
						<div class="iconMain">
							<i class="fa fa-line-chart"aria-hidden="true"></i>
							<h2 class="textNumber">10</h2>
							<p class="title">New Sales</p>
						</div>

					</div>
				</div>
				<div class="col-md-3 col-xs-12 pl-0">
					<div class="userProfile">
						<div class="iconMain">
							<i class="fa fa-users"aria-hidden="true"></i>
							<h2 class="textNumber">16</h2>
							<p class="title">New Customer</p>
						</div>

					</div>
				</div>
				<div class="col-md-3 col-xs-12 pl-0">
					<div class="userProfile">
						<div class="iconMain">
							<i class="fa fa-tasks"aria-hidden="true"></i>
							<h2 class="textNumber">30</h2>
							<p class="title">New Tasks</p>
						</div>

					</div>
				</div>

			</div>
		</div>

    <div class="col-md-12 col-sm-12 col-12 boxMain">
      <h5 class="mainText">
        Account
      </h5>
      <div class="row m-0">
        <div class="col-md-12 col-xs-12 pl-0">

          <div class="userProfile row" style="width:100%">
            <div class="col-md-4 col-xs-12 imageBox" align="center">
              <img src="images/ninjaAvatar.png" style="width:150px">
              <div class="col-md-12">
              <button type="button" class="btn btn-default placeImage">
              Change Image
            </button>
          </div>
            </div>
            <div class="col-md-8 col-xs-12">
              <h2>John Doe</h2>
              <span class="tradeMark">Admin</span>
              <h5 class="textTop">General Manager at Company Sdn Bhd</h5>
              <h5 class="textTop">johndoe@gmail.com</h5>
              <h5 class="textTop">Last Login : 12-12-2019 12.00pm</h5>
              <h5 class="textTop">Status User : Active</h5>
              <i class="fa fa-facebook-square fa-2x" style="color:#2700ff;margin-right:10px"></i>
              <i class="fa fa-twitter-square fa-2x" style="color:#0095ff;margin-right:10px"></i>
              <i class="fa fa-pinterest-square fa-2x" style="color:#ff0000;margin-right:10px"></i>
              <i class="fa fa-linkedin-square fa-2x" style="color:#507ec3"></i>

            </div>
          </div>
        </div>
      </div>
    </div>


		<div class="col-md-12 col-sm-12 col-lg-8 boxMain">
			<h5 class="mainText">
				Sales Revenue
			</h5>
			<div class="row m-0 mainBg">
				<div id="chartdiv"></div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12 col-lg-4 boxMain">
			<h5 class="mainText">
				Notification
			</h5>
			<div class="row m-0 mainBg">
				<div class="page" style="color:black">
					<div class="page__demo">
						<div class="main-container page__container">
							<div class="timeline">
								<div class="timeline__group">
									<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">2</span>
              <span class="timeline__month">Feb</span>
          </div> -->
          <div class="timeline__post">
          	<div class="timeline__content">
          		<p>Organization chart removed by XXX</p>
          	</div>
          </div>
      </div>
      <div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">1</span>
              <span class="timeline__month">Sept</span>
          </div> -->
          <div class="timeline__post haventSeenBg">
          	<div class="timeline__content">
          		<p class="haventSeen">XXX have deleted one image</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">14</span>
              <span class="timeline__month">Jul</span>
          </div> -->
          <div class="timeline__post haventSeenBg">
          	<div class="timeline__content">
          		<p class="haventSeen">Devan had sent you with a new message</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">28</span>
              <span class="timeline__month">Aug</span>
          </div> -->
          <div class="timeline__post">
          	<div class="timeline__content">
          		<p>John had changed his portfolio</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">28</span>
              <span class="timeline__month">Aug</span>
          </div> -->
          <div class="timeline__post">
          	<div class="timeline__content">
          		<p>Sally had changed his profile image</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">14</span>
              <span class="timeline__month">Jul</span>
          </div> -->
          <div class="timeline__post haventSeenBg">
          	<div class="timeline__content">
          		<p class="haventSeen">Jiiu had sent you with a new message</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">28</span>
              <span class="timeline__month">Aug</span>
          </div> -->
          <div class="timeline__post">
          	<div class="timeline__content">
          		<p>John had changed his password</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">14</span>
              <span class="timeline__month">Jul</span>
          </div> -->
          <div class="timeline__post haventSeenBg">
          	<div class="timeline__content">
          		<p class="haventSeen">Today is Patrick Birthday! Wish him now.</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">14</span>
              <span class="timeline__month">Jul</span>
          </div> -->
          <div class="timeline__post">
          	<div class="timeline__content">
          		<p>Pia had post a memo</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">14</span>
              <span class="timeline__month">Jul</span>
          </div> -->
          <div class="timeline__post haventSeenBg">
          	<div class="timeline__content">
          		<p class="haventSeen">Today is Jenny Birthday! Wish her now.</p>
          	</div>
          </div>
      </div>
  </div>
  <div class="timeline__group">
  	<div class="timeline__box">
            <!-- <div class="timeline__date">
              <span class="timeline__day">14</span>
              <span class="timeline__month">Jul</span>
          </div> -->
          <div class="timeline__post">
          	<div class="timeline__content">
          		<p>SWE sent you a message</p>
          	</div>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>

</div>
</div>

<div class="col-md-12 col-sm-12 col-lg-12 boxMain">
	<h5 class="mainText">
		Total Sales Revenue
	</h5>
	<div class="row m-0 mainBg">
		<div id="chartdiv2"></div>
	</div>
</div>


</div>
</div>
<!-- end container-fluid -->


<?php include 'footerDashboard.php'; ?>
<?php include 'sharejsDashboard.php'; ?>

<!-- Line chart -->
<script src="js/amchart-core.js"></script>
<script src="js/amchart-chart.js"></script>
<script src="js/amchart-animated.js"></script>
<!-- Line chart -->

<!-- Bar chart -->
<script src="js/amchart-theme-frozen.js"></script>
<script src="js/amchart-theme-animated.js"></script>
<!-- Bar chart -->

<!-- Line chart -->
<script>
// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);

var data = [];
var value = 50;
for(let i = 0; i < 300; i++){
	let date = new Date();
	date.setHours(0,0,0,0);
	date.setDate(i);
	value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
	data.push({date:date, value: value});
}

chart.data = data;

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.minGridDistance = 60;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "value";
series.dataFields.dateX = "date";
series.tooltipText = "{value}"

series.tooltip.pointerOrientation = "vertical";

chart.cursor = new am4charts.XYCursor();
chart.cursor.snapToSeries = series;
chart.cursor.xAxis = dateAxis;

//chart.scrollbarY = new am4core.Scrollbar();
chart.scrollbarX = new am4core.Scrollbar();
</script>
<!-- Line chart -->


<!-- Bar chart -->
<script>
// Themes begin
am4core.useTheme(am4themes_frozen);
am4core.useTheme(am4themes_animated);
// Themes end

 // Create chart instance
 var chart = am4core.create("chartdiv2", am4charts.XYChart);

// Add data
chart.data = [{
  "year": 2005,
  "income": 23.5,
  "expenses": 18.1
},{
	"year": 2006,
	"income": 26.2,
	"expenses": 25
},{
	"year": 2007,
	"income": 30.1,
	"expenses": 30
},{
	"year": 2008,
	"income": 29.5,
	"expenses": 57
},{
	"year": 2009,
	"income": 24.6,
	"expenses": 17
}];

// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "year";
categoryAxis.numberFormatter.numberFormat = "#";
categoryAxis.renderer.inversed = true;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.cellStartLocation = 0.1;
categoryAxis.renderer.cellEndLocation = 0.9;

var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis()); 
valueAxis.renderer.opposite = true;

// Create series
function createSeries(field, name) {
	var series = chart.series.push(new am4charts.ColumnSeries());
	series.dataFields.valueX = field;
	series.dataFields.categoryY = "year";
	series.name = name;
	series.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
	series.columns.template.height = am4core.percent(100);
	series.sequencedInterpolation = true;

	var valueLabel = series.bullets.push(new am4charts.LabelBullet());
	valueLabel.label.text = "{valueX}";
	valueLabel.label.horizontalCenter = "left";
	valueLabel.label.dx = 10;
	valueLabel.label.hideOversized = false;
	valueLabel.label.truncate = false;

	var categoryLabel = series.bullets.push(new am4charts.LabelBullet());
	categoryLabel.label.text = "{name}";
	categoryLabel.label.horizontalCenter = "right";
	categoryLabel.label.dx = -10;
	categoryLabel.label.fill = am4core.color("#fff");
	categoryLabel.label.hideOversized = false;
	categoryLabel.label.truncate = false;
}

createSeries("income", "Income");
createSeries("expenses", "Expenses");
</script>
<!-- Bar chart -->



</body>
</html>