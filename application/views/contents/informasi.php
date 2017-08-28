<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Kelas Workshop</h4>
					<p class="category">diperbaharui pada 28 Agustus 2017</p>
				</div>
        <div class="content">
					<?php
						$no = 0;
						foreach ($list_kelas as $data) {
							$no++;
							?>
							<div class="typo-line">
								<h5><?php echo $no.'.'.$data['nama_kelas']; ?></h5>
								<blockquote>
									<p>
										<img class="img-informasi" src="<?=$data['gambar_logo'];?>" alt="<?=$data['nama_kelas'];?>">
										<?=$data['deskripsi'];?>
									</p>
								</blockquote>
							</div>
							<?php
						}
					 ?>

          <div class="text-center">
            <a href="<?=base_url();?>members/kelas_workshop" class="btn btn-info btn-fill btn-wd">Pilih Kelas Saya</a>
          </div>

  			</div>
			</div>
		</div>
	</div>
</div>
