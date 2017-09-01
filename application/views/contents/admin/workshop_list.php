<div class="container-fluid">
	<div class="row">

		<!-- contoh kelas penuh -->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="card">
				<div class="header">
					<h5 class="title">Daftar Kelas Workshop</h5>
				</div>
				<div class="content">
					<ul class="list-unstyled team-members">

            <?php foreach ($workshop as $data) {
              ?>

              <li>
  							<div class="row">
                  <div class="col-xs-3">
  									<div class="avatar">
  										<img src="<?=$data['gambar_logo'];?>" alt="Circle Image" class="img-circle img-no-padding img-responsive" alt="<?=$data['nama_kelas'];?>">
  									</div>
  								</div>
  								<div class="col-xs-5">
  									<?=$data['nama_kelas'];?>
  									<br>
                      <span class="text-success"><small><i class="fa fa-check-circle"></i><?=$data['ruang_kelas'];?></small></span>
                  </div>

      								<div class="col-xs-3 text-right">
      									<a href="<?=base_url();?>AdminController/peserta_workshop/<?=$data['id_workshop'];?>" class="btn btn-xs btn-success btn-icon"><i class="fa fa-eye"></i> Peserta</a>
      								</div>
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
