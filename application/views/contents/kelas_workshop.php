<div class="container-fluid">
	<div class="row">

		<?php

			$data['pesan']	= $this->session->flashdata('pesan');
	    if (isset($data['pesan'])) {
				$this->load->view('contents/notifikasi', $data);
	    } ?>

		<!-- informasi kelas dibuka -->
		<?php if ($is_buka['hasil'] == 0) {
			// jika kelas belum dibuka
			$this->load->view('contents/konten_belum_dibuka');
		}
		else {
			if ($user->id_workshop == NULL) {
				// informasi tidak bisa dirubah
				$this->load->view('contents/info_tidak_bisa_dirubah');
			  ?>
	      <!-- getList Data Kelas Workshop -->
	      <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752965-f91a375e-8b91-11e7-9791-1bd78efaa8e0.png" alt="Idea Development">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Kelas</p>
	                  Idea Development </div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$idea_develop['jumlah'];?>/49</strong>
	                  </div>
	                  <?php if ($idea_develop['jumlah'] >= 49) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-workshop/1" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Gabung</a>
	                      </div>
	                    <?php
	                  }?>

	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752967-f924a25c-8b91-11e7-8bc9-e8186a8f4072.png" alt="Content">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Kelas</p>
	                  Content </div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$kelas_content['jumlah'];?>/49</strong>
	                  </div>
	                  <?php if ($kelas_content['jumlah'] >= 49) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-workshop/2" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Gabung</a>
	                      </div>
	                    <?php
	                  }?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752964-f91742ba-8b91-11e7-9181-9e9c8a5f2076.png" alt="Branding">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Kelas</p>
	                  Branding </div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$branding['jumlah'];?>/49</strong>
	                  </div>
	                  <!-- penuh atau tidak -->
	                  <?php if ($branding['jumlah'] >= 49) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-workshop/3" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Gabung</a>
	                      </div>
	                    <?php
	                  }?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752968-f927f8bc-8b91-11e7-8593-13c99ef6c173.png" alt="Presentation Skill">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Kelas</p>
	                  Presentation Skill </div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$presentation_skill['jumlah'];?>/49</strong>
	                  </div>
	                  <?php if ($presentation_skill['jumlah'] >= 49) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-workshop/4" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Gabung</a>
	                      </div>
	                    <?php
	                  }?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752966-f91c7262-8b91-11e7-8f75-44a94a1671e9.png" alt="Customer Insight">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Kelas</p>
	                  Customer Insight </div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$customer_insight['jumlah'];?>/49</strong>
	                  </div>
	                  <?php if ($customer_insight['jumlah'] >= 49) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-workshop/5" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Gabung</a>
	                      </div>
	                    <?php
	                  }?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <!-- end of list kelas workshop -->
	      <?php
			} else {
			  $kelas_saya = $this->MainModel->getRowDataWhere('users,kelas_workshop','*','users.id_workshop = kelas_workshop.id_workshop AND users.id = '.$user->id.'');
	      ?>
	      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
	        <div class="card card-user">
	            <div class="image">
	                <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="FLS header logo">
	            </div>
	                <div class="author">
	                  <img class="avatar border-gray" src="<?=$kelas_saya['gambar_logo'];?>" alt="FLS Logo">
	                  <h4 class="title"><?=$kelas_saya['nama_kelas'];?><br>
	                    <small><?=$kelas_saya['username'];?></small>
	                  </h4>

	                </div>
	                <hr>
	                <p class="description text-left" style="padding:2em;">
	                    Halo <?=$kelas_saya['first_name'];?>! Berikut E-Ticket kamu :<br><br>
											<i class="ti-user"></i> <strong><?=$kelas_saya['first_name'];?></strong> <br>
											<i class="ti-agenda"></i> <strong><?=$kelas_saya['nama_kelas'];?></strong> <br>
											<i class="ti-location-pin"></i> <strong><?=$kelas_saya['ruang_kelas'];?></strong><br>
											<br>Agar kamu diperbolehkan masuk ke ruangan, Tunjukan E-Ticket ini kepada Rangers yang bertugas ya.
	                </p><br>
	        </div>
	      </div>
	      <?php
			}
		}?>
	</div>
</div>
