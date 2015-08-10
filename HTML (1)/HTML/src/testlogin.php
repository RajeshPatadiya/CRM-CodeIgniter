
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>Page connexion</title>
	
	<!-- Icons -->
     <link href="<?php echo base_url('public/fonts/ionicons/css/ionicons.min.css')?>" rel="stylesheet">
     <link href="<?php echo base_url('public/fonts/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
	

	<!-- Plugins -->
    <link href="<?php echo base_url('public/styles/plugins/waves.css')?>" rel="stylesheet">
     <link href="<?php echo base_url('public/styles/plugins/perfect-scrollbar.css')?>" rel="stylesheet">
	
	<!-- Css/Less Stylesheets -->
	<!-- build:css styles/bootstrap.min.css -->
     <link href="<?php echo base_url('public/styles/vendors/bootstrap.min.css')?>" rel="stylesheet">
	<!-- build:css styles/main.min.css -->
    <link href="<?php echo base_url('public/styles/main.less')?>" rel="stylesheet">
	<!-- /build -->


	 
 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]--> 

	
</head>
<body id="app" class="app off-canvas body-full">
	

	
	<!-- main-container -->
	<div class="main-container clearfix">
		
		<!-- content-here -->
		<div class="content-container" id="content">
			<div class="page page-auth">
				<div class="auth-container">

					<div class="form-head mb20">
						<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><a href="index.html">C.R.M</a></h1>
						<h5 class="text-normal h5 text-center"> connexion administratif</h5>
					</div>

					<div class="form-container">
						 <?php echo validation_errors(); ?>
                         <?php echo form_open('verifylogin'); ?> 
							<div class="md-input-container md-float-label">
								<input type="text"  class="md-input" name="username">
								<label>pseudo admin :</label>
							</div>
                           

							<div class="md-input-container md-float-label">
								<input type="password"  class="md-input" name="password">
								<label>mot de passe :</label>
							</div>

							<div class="clearfix">
								<div class="ui-checkbox ui-checkbox-primary right">
									
								</div>
							</div>
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">

								</div>
								<div class="btn-group">
									<button type="submit" class="btn btn-success">Connexion</button>
							
							<div class="clearfix text-center small">
								
							</div>
						</form>
					</div>

				</div> <!-- #end signin-container -->
			</div>



		</div> 
		<!-- #end content-container -->

	</div> <!-- #end main-container -->


	





	

	<!-- Dev only -->
	<!-- build:remove -->
        <script src="<?php echo base_url('public/scripts/dev/less.min.js')?>"></script>	

	<!-- /build -->

	<!-- Vendors -->
	<!-- build:js scripts/vendors.js -->
            <script src="<?php echo base_url('public/scripts/vendors/jquery.min.js')?>"></script>	
        <script src="<?php echo base_url('public/scripts/vendors/bootstrap.min.js')?>"></script>	

	<!-- /build -->


</body>
</html>