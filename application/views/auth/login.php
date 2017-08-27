<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url();?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?=$title;?> | #DaretoCreate Future Leader Summit 2017</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />


    <!--  Paper Dashboard core CSS    -->
    <link href="<?=base_url();?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url();?>assets/css/custom.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">

				<!-- content acara -->
        <div class="content">
          <div class="container-fluid">
            <div class="row" style="margin-top:2em;">
              <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="FLS header logo">
                    </div>
                        <div class="author">
                          <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29747027-e5da50a0-8b16-11e7-9a25-73e3dfa65363.png" alt="FLS Logo">
                          <h4 class="title">Login Dulu Young Leader!<br>
                          </h4>
                        </div>
                        <hr>
                    <!-- form login -->
                    <div class="content">
                      <div class="row">
                        <div class="col-md-12">
                          <!-- flash data jika login gagal -->
                          <?php if (isset($message)) {
                            ?>
                            <div class="alert alert-warning">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><?=$message;?></span>
                                </div>
                            <?php
                          } ?>
                          <!-- form login -->
                        <?php echo form_open('auth/login') ?>
                            <div class="form-group">
                            	<label>Email</label>
                            	<?php echo form_input(array('name'=>'identity','id'=>'identity','class'=>'form-control border-input','type'=>'email','required'=>'required','placeholder'=>'email@kamu.com')); ?>
                            </div>
                            <div class="form-group">
                            	<label>Password</label>
                            	<?php echo form_input(array('name'=>'password','id'=>'password','class'=>'form-control border-input','type'=>'password','required'=>'required','placeholder'=>'passwordkamu')); ?>
                            </div>
                            <!-- ingat saya | remember me -->
                            <div class="checkbox">
                              <label style="margin-left:-0.8em;">
                                <?php echo form_checkbox(array('name'=>'remember','value'=>1,'id'=>'remember')) ?> Ingat Saya
                              </label>
                            </div>
                            <!-- login button -->
                            <div class="text-center">
                              <button type="submit" class="btn btn-info btn-fill btn-wd">Login</button>
                          </div>
                          <?php echo form_close(); ?>

                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          <!--  -->
        </div>
				<!-- this is footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="col-md-4 col-md-offset-4 text-center">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://indrakusuma.web.id">Creative & IT Team</a>
                </div>
            </div>
        </footer>
				<!-- end of footer -->
    </div>
</div>


</body>
  <!--   Core JS Files   -->
	<script src="<?=base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=base_url();?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?=base_url();?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?=base_url();?>assets/js/demo.js"></script>

</html>
