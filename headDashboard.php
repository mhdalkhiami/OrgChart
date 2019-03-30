<?php 
  
    include("include/config.php");
    include("include/class.general.php");
    
    // Get the current selected language
    $language = General::getLanguage();
?>
<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta content="" name="description" />
	<meta content="" name="author" />

	<title><?php echo $config["title"] ?></title>

	<!-- Icons -->
	<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
	<link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="images/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="images/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="images/icon144.png" sizes="144x144">
	<!-- END Icons -->

	<!-- Stylesheets -->
	<!-- Bootstrap is included in its original form, unaltered -->
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Related styles of various icon packs and plugins -->
	<link href="plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
	<link href="plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
	<link href="plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
	<link href="plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/jquery-menuclipper/jquery.menuclipper.css" rel="stylesheet" type="text/css" />
	

	<!-- icon packs -->
	<link href="css/mainIcons.css" rel="stylesheet" type="text/css">

	<!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
	<link class="main-stylesheet" href="css/mainDashboard.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

	<!-- customize css -->
	<link rel="stylesheet" href="css/customDashboard.css?ts=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/custom.css?ts=<?php echo time(); ?>">

	<!-- graph css -->
	<link rel="stylesheet" href="css/export.css">

	<!-- END Stylesheets -->

</head>
