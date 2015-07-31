<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>Ajouter un Service</title>
	
	<!-- Icons -->
    <link href="<?php echo base_url('public/fonts/ionicons/css/ionicons.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('public/fonts/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="public/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="public/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="public/styles/plugins/waves.css">
	<link rel="stylesheet" href="public/styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="public/styles/plugins/select2.css">
	<link rel="stylesheet" href="public/styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="public/styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="public/styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="public/styles/plugins/summernote.css">
	
	<!-- Css/Less Stylesheets -->
	<!-- build:css styles/bootstrap.min.css -->
	<link rel="stylesheet" href="styles/vendors/bootstrap.min.css">
	<!-- /build -->
	<!-- build:css styles/main.min.css -->
	<link rel="stylesheet/less" href="styles/main.less">	
	<!-- /build -->


	 
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<body id="app" class="app off-canvas">
	


			
					</div> <!-- #end tab content -->
				</div> <!-- #end sidebar-wrap -->
			</li>

		</ul>

	</header>
	<!-- #end header -->


	<!-- main-container -->
	<div class="main-container clearfix">
		<!-- main-navigation -->
		<aside class="nav-wrap" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<!-- site logo -->
				<a href="index.html" class="site-logo text-uppercase">
					<i class="ion ion-disc"></i>
					<span class="text">C.M.P</span>
				</a>
			</div>

			<!-- Site nav (vertical) -->

			<nav class="site-nav clearfix" role="navigation">
				<div class="profile clearfix mb15">
					<img src="images/admin.jpg" alt="admin">
					<div class="group">
						<h5 class="name">Expert4dev</h5>
						<small class="desig text-uppercase">C.M.P</small>
					</div>
				</div>

				<!-- navigation -->
				<ul class="list-unstyled clearfix nav-list mb15">
					<li>
						<a href="index.html">
							<i class="ion ion-monitor"></i>
							<span class="text">tableau de bord </span>
						</a>
					</li>
					<li>
						<a href="email.inbox.html">
							<i class="ion ion-email"></i>
							<span class="text">Service</span>
						</a>
					</li>

					<li>
						<a href="calendar.html">
							<i class="ion ion-calendar"></i>
							<span class="text">Client</span>
							<span class="badge badge-xs badge-danger">hot</span>
						</a>
					</li>
					<li>
						<a href="material.html">
							<i class="ion ion-icecream"></i>
							<span class="text">Facture</span>
							<span class="badge badge-xs badge-success">new</span>
						</a>
					</li>
					
					<li>
						<a href="javascript:;">
							<i class="ion ion-android-options"></i>
							<span class="text">Depense</span>
							<i class="arrow ion-chevron-left"></i>
							<span class="badge badge-xs badge-info">10</span>
						</a>
						</li>
                        </ul>
                        </nav>
			

			<!-- nav-foot -->
			<footer class="nav-foot">
				<p>2015 &copy; <span>C.M.P</span></p>
			</footer>

		</aside>
		<!-- #end main-navigation -->

		<!-- content-here -->
		<div class="content-container" id="content">
			<div class="page page-forms-elements">

				<ol class="breadcrumb breadcrumb-small">
					<li>Ajout</li>
					<li class="active"><a href="forms.elements.html">Service</a></li>
				</ol>

				<div class="page-wrap">
					<!-- row -->
					<div class="row">
				
						<!-- col-left -->
						<div class="col-sm-12 col-md-6">
							<div class="panel panel-default panel-hovered panel-stacked mb30">
								<div class="panel-heading"></div>
								<div class="panel-body">
									<form role="form" class="form-horizontal" action="javascript:;"> <!-- form horizontal acts as a row -->
										<!-- normal control -->
										<div class="form-group">
											<label class="col-md-3 control-label">Date d'envoie  :</label>
											<div class="col-md-9">
												<input type="text" class="form-control" name="date_envoie">
											</div>
										</div>

									
										<div class="form-group">
											<label class="col-md-3 control-label"> Date validation  : </label>
											<div class="col-md-9">
												<input type="text" class="form-control"  name="date_validation">
											</div>
										

									
										
										<div class="clearfix right">
											<input class="btn btn-primary mr5" name="ajouter" value="ajouter "type="submit"></input>
											<button class="btn btn-default">Annuler</button>
										</div>
									</form>
								</div>
							</div>
						</div> 


						


	
	<!-- build:remove -->
	<script src="scripts/dev/less.min.js"></script>	
	<!-- /build -->

	<!-- Vendors -->
	<!-- build:js scripts/vendors.js -->
	<script src="public/scripts/vendors/jquery.min.js"></script> 
	<script src="public/scripts/vendors/bootstrap.min.js"></script>
	<!-- /build -->
	<script src="public/scripts/plugins/screenfull.js"></script>
	<script src="public/scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="public/scripts/plugins/waves.min.js"></script>
	<script src="public/scripts/plugins/select2.min.js"></script>
	<script src="public/scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="public/scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="public/scripts/plugins/summernote.min.js"></script>
	<script src="public/scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="public/scripts/app.js"></script>
	<script src="public/scripts/form-elements.init.js"></script>
</body>
</html>