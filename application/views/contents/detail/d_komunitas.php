<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title"><?=$info['nama_komunitas'];?></h4>
					<p class="category">9 September 2017</p>
				</div>
				<hr>
        <div class="content">
										<figure>
										  <img class="img-responsive" src="<?=$info['gambar_logo'];?>" alt="<?=$info['nama_komunitas'];?>">
                      <figcaption class="text-center"><?=$info['nama_komunitas'];?></figcaption>
										</figure><hr>
									<p class="description text-left" style="padding:1.2em;">
                    <?=$info['deskripsi'];?>
									</p>

          <div class="text-center">
						<a href="<?=base_url();?>members/voting_komunitas" class="btn btn-warning btn-sm btn-fill"><i class="ti-search"></i> Lainya</a>
            <a href="<?=base_url();?>members/vote-komunitas/<?=$info['id_komunitas'];?>" class="btn btn-success btn-sm btn-fill"><i class="ti-heart"></i> VOTE</a>
          </div>

  			</div>
			</div>
		</div>
	</div>
</div>
