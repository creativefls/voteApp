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
	      <!-- getList Data makanan -->
				<!-- SOTO AYAM -->
	      <div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752965-f91a375e-8b91-11e7-9791-1bd78efaa8e0.png" alt="Idea Development">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Pilihan #1</p>
	                  Soto Ayam</div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$soto_ayam['jumlah'];?>/100</strong>
	                  </div>
	                  <?php if ($soto_ayam['jumlah'] >= 100) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Stok Habis</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-menu/2" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Order</a>
	                      </div>
	                    <?php
	                  }?>

	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
				<!-- Nasi Ayam -->
				<div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752965-f91a375e-8b91-11e7-9791-1bd78efaa8e0.png" alt="Idea Development">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Pilihan #2</p>
	                  Nasi Ayam</div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$soto_ayam['jumlah'];?>/100</strong>
	                  </div>
	                  <?php if ($nasi_ayam['jumlah'] >= 100) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Stok Habis</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-menu/1" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Order</a>
	                      </div>
	                    <?php
	                  }?>

	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
				<!-- Tahu Gimbal -->
				<div class="col-lg-4 col-md-4 col-sm-6">
	        <div class="card">
	          <div class="content">
	            <div class="row">
	              <div class="col-xs-4">
	                <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29752965-f91a375e-8b91-11e7-9791-1bd78efaa8e0.png" alt="Idea Development">
	              </div>
	              <div class="col-xs-8">
	                <div class="numbers">
	                  <p>Pilihan #3</p>
	                  Tahu Gimbal</div>
	              </div>
	            </div>
	            <div class="footer">
	              <hr />
	              <div class="stats">
	                <div class="col-xs-12">
	                  <div class="col-xs-6">
	                    <i class="ti-ruler-pencil"></i> <strong> <?=$soto_ayam['jumlah'];?>/100</strong>
	                  </div>
	                  <?php if ($tahu_gimbal['jumlah'] >= 100) {
	                    ?>
	                    <!-- kelas penuh -->
	                    <div class="col-xs-6">
	                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Stok Habis</a>
	                    </div>
	                    <?php
	                  } else {
	                    ?>
	                    <!-- kelas tersedia -->
	                      <div class="col-xs-6">
	                        <a href="<?=base_url();?>members/pilih-menu/3" class="btn btn-success btn-xs btn-fill btn-wd btn-block">Order</a>
	                      </div>
	                    <?php
	                  }?>

	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
				<!-- end of data makanan -->
	      <?php
			}
      // jika sudah memilih makanan
      else {
			  $menu_saya = $this->MainModel->getRowDataWhere('users,menu_makan','*','users.id_makan = menu_makan.id_makan AND users.id = '.$user->id.'');
	      ?>
	      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
	        <div class="card card-user">
	            <div class="image">
	                <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="FLS header logo">
	            </div>
	                <div class="author">
	                  <img class="avatar border-gray" src="<?=$menu_saya['foto_makanan'];?>" alt="<?=$menu_saya['nama_makanan'];?>">
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
