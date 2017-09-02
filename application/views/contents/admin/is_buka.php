<div class="container-fluid">
	<div class="row">

		<?php
			$data['pesan']	= $this->session->flashdata('pesan');
	    if (isset($data['pesan'])) {
				$this->load->view('contents/notifikasi', $data);
	    } ?>

		<!-- contoh kelas penuh -->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="card">
				<div class="header">
					<h5 class="title">Daftar Kelas</h5>
				</div>
				<div class="content">
					<ul class="list-unstyled team-members">

            <?php foreach ($is_buka as $data) {
              ?>

              <li>
  							<div class="row">
                  <div class="col-xs-3">
  									<div class="avatar">
  										<img src="https://user-images.githubusercontent.com/10141928/29752964-f91742ba-8b91-11e7-9181-9e9c8a5f2076.png" alt="Circle Image" class="img-circle img-no-padding img-responsive" alt="<?=$data['deskripsi'];?>">
  									</div>
  								</div>
  								<div class="col-xs-5">
  									<?=$data['deskripsi'];?>
  									<br>
  									<!-- cek apakah sudah memilih kelas workshop -->
                    <?php if ($data['is_buka'] == 1) {
                      echo '<span class="text-success"><small><i class="fa fa-check-circle"></i>Sudah Dibuka</small></span>
                      </div>

      								<div class="col-xs-3 text-right">
      									<a href="'.base_url().'AdminController/buka_tutup/'.$data['id_buka'].'/0" class="btn btn-xs btn-danger btn-icon"><i class="fa fa-lock"></i>Tutup</a>
      								</div> ';
                    }
                    else {
                      echo '<span class="text-danger"><small><i class="fa fa-info-circle"></i>Belum Dibuka</small></span>
                      </div>

      								<div class="col-xs-4">
      									<a href="'.base_url().'AdminController/buka_tutup/'.$data['id_buka'].'/1" class="btn btn-xs btn-success btn-icon"><i class="fa fa-unlock"></i>Buka</a>
      								</div>';
                    } ?>

  							</div>
  						</li>

              <?php
            } ?>


					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
