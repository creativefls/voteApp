<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-5">
			<div class="card card-user">
				<div class="image">
					<img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="FLS header logo">
				</div>
				<div class="content">
					<div class="author">
						<img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29747027-e5da50a0-8b16-11e7-9a25-73e3dfa65363.png" alt="FLS Logo">
						<h4 class="title"><?php echo $user->first_name." ".$user->last_name;?><br>
                                           <a href="#"><small><?php echo $user->email; ?></small></a>
                                        </h4>
					</div>
					<p class="description text-center">
						"Be a Creative Creator to Maximize Demographic Dividend"
					</p>
				</div>

			</div>
		</div>

		<!-- ubah password -->
		<div class="col-lg-8 col-md-5">
			<div class="card">
				<div class="header">
					<h4 class="title">Ubah Password</h4>
				</div>
				<div class="content">
          <!-- jika gagal ganti password -->
          <?php if (isset($message)) {
            ?>
            <div class="alert alert-warning">
                    <button type="button" aria-hidden="true" class="close">×</button>
                    <span><?=$message;?></span>
                </div>
            <?php
          } ?>
					  <?php echo form_open('auth/change_password') ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control border-input" disabled="" placeholder="Company" value="<?=$user->email;?>" type="text">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Old Password</label>
									<?php echo form_input(array('name'=>'old','id'=>'old','class'=>'form-control border-input','type'=>'password','required'=>'required','placeholder'=>'*********')); ?>
								</div>
							</div>
						</div>

						<!-- new password -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>New Password (min. 8 Karakter)</label>
									<?php echo form_input(array('name'=>'new','id'=>'new','class'=>'form-control border-input','type'=>'password','required'=>'required','placeholder'=>'New Password','pattern'=>'^.{8}.*$')); ?>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Confirm New Password</label>
									<?php echo form_input(array('name'=>'new_confirm','id'=>'new_confirm','class'=>'form-control border-input','type'=>'password','required'=>'required','placeholder'=>'Confirm New Password','pattern'=>'^.{8}.*$')); ?>
								</div>
							</div>
						</div>
            <!-- user id -->
            <?php echo form_input($user_id);?>
						<div class="text-center">
              <?php echo form_submit(array('name'=>'submit','class'=>'btn btn-info btn-fill btn-wd','value'=>'Ubah Password')); ?>
						</div>
						<div class="clearfix"></div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
