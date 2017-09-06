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
    // jika kelas sudah dibuka
		else {
      // jika belum memilih makanan
      if ($user->id_makan == NULL) {
				// informasi tidak bisa dirubah
		    $this->load->view('contents/info_tidak_bisa_dirubah');
			  ?>

				<!-- nasi ayam -->
				<div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card card-user">
	            <div class="image">
	                <img src="https://user-images.githubusercontent.com/10141928/30072851-db2b383c-9295-11e7-894a-173ff85e305d.png" alt="FLS header logo">
	            </div>
							<!-- judul makanan & sisa porsi -->
									<p class="description" style="padding-left:2em;">
	                    <i class="ti-bookmark"></i> <strong>Nasi Ayam Semarang</strong>
											<br> <i class="ti-shopping-cart"></i> Sisa <strong><?=100-$nasi_ayam['jumlah'];?> Porsi</strong> <br>
	                </p>
									<!-- selengkapnya dan order -->
									<div class="footer">
			              <hr />
			              <div class="stats">
			                  <div class="col-xs-6">
			                      <a href="<?=base_url();?>members/detail/makanan/1" class="btn btn-info btn-sm"><i class="ti-search"></i>Selengkapnya</a>
			                  </div>
			                  <?php if ($nasi_ayam['jumlah'] >= 100) {
			                    ?>
			                    <!-- Stock habis -->
			                    <div class="col-xs-6">
			                      <a href="#" class="btn btn-danger btn-sm btn-fill"><i class="ti-close"></i>Stok Habis</a>
			                    </div>
			                    <?php
			                  } else {
			                    ?>
			                    <!-- kelas tersedia -->
			                      <div class="col-xs-6">
			                        <a href="<?=base_url();?>members/pilih-menu/1" class="btn btn-success btn-sm btn-fill"><i class="ti-shopping-cart-full"></i> ORDER</a>
			                      </div>
			                    <?php
			                  }?>
			              </div>
			            </div>
	        </div>
	      </div>
				<!-- end nasi ayam -->

				<!-- soto ayam -->
				<div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card card-user">
	            <div class="image">
	                <img src="https://user-images.githubusercontent.com/10141928/30072849-d789a4fc-9295-11e7-8538-26958c51507a.png" alt="FLS header logo">
	            </div>
							<!-- judul makanan & sisa porsi -->
									<p class="description" style="padding-left:2em;">
	                    <i class="ti-bookmark"></i> <strong>Soto Ayam Semarang</strong>
											<br> <i class="ti-shopping-cart"></i> Sisa <strong><?=100-$soto_ayam['jumlah'];?> Porsi</strong> <br>
	                </p>
									<!-- selengkapnya dan order -->
									<div class="footer">
			              <hr />
			              <div class="stats">
			                  <div class="col-xs-6">
			                      <a href="<?=base_url();?>members/detail/makanan/2" class="btn btn-info btn-sm"><i class="ti-search"></i>Selengkapnya</a>
			                  </div>
			                  <?php if ($soto_ayam['jumlah'] >= 100) {
			                    ?>
			                    <!-- Stock habis -->
			                    <div class="col-xs-6">
			                      <a href="#" class="btn btn-danger btn-sm btn-fill"><i class="ti-close"></i>Stok Habis</a>
			                    </div>
			                    <?php
			                  } else {
			                    ?>
			                    <!-- kelas tersedia -->
			                      <div class="col-xs-6">
			                        <a href="<?=base_url();?>members/pilih-menu/2" class="btn btn-success btn-sm btn-fill"><i class="ti-shopping-cart-full"></i> ORDER</a>
			                      </div>
			                    <?php
			                  }?>
			              </div>
			            </div>
	        </div>
	      </div>
				<!-- end soto ayam -->

	      <!-- tahu gimbal -->
				<div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card card-user">
	            <div class="image">
	                <img src="https://user-images.githubusercontent.com/10141928/30072846-d45d9d2e-9295-11e7-9558-2abaeb0ac428.png" alt="FLS header logo">
	            </div>
							<!-- judul makanan & sisa porsi -->
									<p class="description" style="padding-left:2em;">
	                    <i class="ti-bookmark"></i> <strong>Tahu Gimbal Semarang</strong>
											<br> <i class="ti-shopping-cart"></i> Sisa <strong><?=100-$tahu_gimbal['jumlah'];?> Porsi</strong> <br>
	                </p>
									<!-- selengkapnya dan order -->
									<div class="footer">
			              <hr />
			              <div class="stats">
			                  <div class="col-xs-6">
			                      <a href="<?=base_url();?>members/detail/makanan/3" class="btn btn-info btn-sm"><i class="ti-search"></i>Selengkapnya</a>
			                  </div>
			                  <?php if ($tahu_gimbal['jumlah'] >= 100) {
			                    ?>
			                    <!-- Stock habis -->
			                    <div class="col-xs-6">
			                      <a href="#" class="btn btn-danger btn-sm btn-fill"><i class="ti-close"></i>Stok Habis</a>
			                    </div>
			                    <?php
			                  } else {
			                    ?>
			                    <!-- kelas tersedia -->
			                      <div class="col-xs-6">
			                        <a href="<?=base_url();?>members/pilih-menu/3" class="btn btn-success btn-sm btn-fill"><i class="ti-shopping-cart-full"></i> ORDER</a>
			                      </div>
			                    <?php
			                  }?>
			              </div>
			            </div>
	        </div>
	      </div>
				<!-- end of tahu gimbal -->
	      <?php
			}
      // jika sudah memilih makanan
      else {
			  $menu_saya = $this->MainModel->getRowDataWhere('users,menu_makan','*','users.id_makan = menu_makan.id_makan AND users.id = '.$user->id.'');
	      ?>
	      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
	        <div class="card card-user">
	            <div class="image">
	                <img src="<?=$menu_saya['foto_makanan'];?>" alt="FLS header logo">
	            </div>
	                <div class="author">
	                  <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29747027-e5da50a0-8b16-11e7-9a25-73e3dfa65363.png" alt="<?=$menu_saya['nama_makanan'];?>">
	                  <h4 class="title"><?=$menu_saya['nama_makanan'];?><br>
	                    <small><?=$menu_saya['email'];?></small>
	                  </h4>

	                </div>
	                <hr>
									<p class="description text-left" style="padding:2em;">
	                    Berikut E-Ticket kamu :<br><br>
											<i class="ti-user"></i> <strong><?=$menu_saya['first_name'];?></strong> <br>
											<i class="ti-shopping-cart-full"></i> <strong><?=$menu_saya['nama_makanan'];?></strong> <br>
											<br>Agar kamu bisa mendapatkan makanan pilihamu, Tunjukan E-Ticket ini kepada Rangers yang bertugas ya.
	                </p><br>
	        </div>
	      </div>
	      <?php
			}
		}?>
	</div>
</div>
