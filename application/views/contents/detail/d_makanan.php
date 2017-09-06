<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
			<div class="card">
				<div class="header">
					<h4 class="title"><?=$info['nama_makanan'];?></h4>
					<p class="category">10 September 2017</p>
				</div>
				<div class="content">

					<hr>
					<figure>
						<img class="img-responsive" src="<?=$info['foto_makanan'];?>" alt="<?=$info['nama_makanan'];?>">
						<figcaption class="text-center"><?=$info['nama_makanan'];?></figcaption>
					</figure>
								<hr>
								<p class="description text-left" style="padding:1.2em;">

										<?=$info['deskripsi_makanan'];?>
								</p>

								<!-- pilih makanan -->
								<div class="text-center">
									<div class="col-12-6">
										<a href="<?=base_url();?>members/menu_makan" class="btn btn-warning btn-sm btn-fill"><i class="ti-search"></i> Lainya</a>
									<?php if ($stok['jumlah'] >= 100) {
										?>
										<!-- Stock habis -->
											<a href="#" class="btn btn-danger btn-sm btn-fill"><i class="ti-close"></i> STOK HABIS</a>
										<?php
									} else {
										?>
												<a href="<?=base_url();?>members/pilih-menu/3" class="btn btn-success btn-sm btn-fill"><i class="ti-shopping-cart-full"></i> ORDER SEKARANG</a>
										<?php
									}?>
								</div>
			          </div>
				</div>
			</div>
		</div>
	</div>
</div>
