<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="https://user-images.githubusercontent.com/10141928/29763334-dc42e228-8bfc-11e7-8b86-222741dcd7a4.png">
	<link rel="icon" type="image/png" sizes="96x96" href="https://user-images.githubusercontent.com/10141928/29763334-dc42e228-8bfc-11e7-8b86-222741dcd7a4.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<meta content='#cecece' name='theme-color'/>

	<title><?=$title;?> | #DaretoCreate Future Leader Summit 2017</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?=base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?=base_url();?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url();?>assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">
    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
		<!-- jenis menunya users -->
		<?php
			if ($this->ion_auth->is_admin()) {
				// menampilkan menu untuk admin
				$this->load->view('layouts/menu_admin.php');
			}
			else{
				$this->load->view('layouts/menu_members');
			}
		?>
    </div>

    <div class="main-panel">
				<!-- header -->
        <?php $this->load->view('layouts/header'); ?>

				<!-- content acara -->
        <div class="content">
					<?php $this->load->view("$content"); ?>
        </div>
				<!-- this is footer -->
				<?php $this->load->view('layouts/footer'); ?>
				<!-- end of footer -->
    </div>
</div>


</body>
  <!--   Core JS Files   -->
	<script src="<?=base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=base_url();?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!-- custom javascript untuk admin -->
	<?php
		if ($this->ion_auth->is_admin()) {
			$this->load->view('custom/admin_js');
		}
	?>

	<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?=base_url();?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?=base_url();?>assets/js/demo.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			demo.initChartist();
		});
	</script>

</html>
