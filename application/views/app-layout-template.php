<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

		<title>WELCOME TO VOTING SYSTEM VERSION 3</title>

		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/ionicons/css/ionicons.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/dist/css/AdminLTE.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/dist/css/skins/skin-blue.min.css'); ?>">

		<script src="<?php echo site_url('assets/plugins/jquery/dist/jquery.min.js'); ?>"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="skin-blue sidebar-mini">

		<div class="wrapper">
			<?php $this->load->view('partials/main-header'); ?>
			<?php $this->load->view('partials/main-sidebar'); ?>

			<div class="content-wrapper">
				<?php $this->load->view('partials/content-header'); ?>
				<section class="content">
	           <?php $this->load->view($main_content); ?>
	         </section>
			</div>

			<?php $this->load->view('partials/main-footer'); ?>
			<?php $this->load->view('partials/control-sidebar'); ?>
		</div>

		<script src="<?php echo site_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/dist/js/app.min.js'); ?>"></script>

	</body>
</html>
