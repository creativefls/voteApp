<div class="container-fluid">
	<div class="row">

		<!-- contoh kelas penuh -->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="card">
				<div class="header">
					<h5 class="title">Daftar Makanan</h5>
				</div>
				<div class="content">
					<ul class="list-unstyled team-members">
						<!-- awal list workshop -->
            <?php foreach ($makan as $data) {
              ?>
              <li>
  							<div class="row">
                  <div class="col-xs-3">
  									<div class="avatar">
  										<img src="<?=$data['foto_makanan'];?>" alt="Circle Image" class="img-circle img-no-padding img-responsive" alt="<?=$data['nama_makanan'];?>">
  									</div>
  								</div>
  								<div class="col-xs-6">
  									<?=$data['nama_makanan'];?>
                  </div>

      								<div class="col-xs-3 text-right">
      									<a href="<?=base_url();?>AdminController/peserta_makan/<?=$data['id_makan'];?>" class="btn btn-xs btn-info btn-icon"><i class="fa fa-users"></i></a>
      								</div>
  							</div>
  						</li>

              <?php
            } ?>
						<!-- akhir dari list workshop -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
