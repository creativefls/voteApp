<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title"><?=$info['nama_komunitas'];?></h4>
					<p class="category">9 September 2017</p>
				</div>
        <div class="content">
							<div class="typo-line">
									<p>
										<figure>
										  <img class="img-responsive" src="<?=$info['gambar_logo'];?>" alt="<?=$info['nama_komunitas'];?>">
                      <figcaption class="text-center"><?=$info['nama_komunitas'];?></figcaption>
										</figure>
                    <br>
                    <?=$info['deskripsi'];?>
									</p>
							</div>

          <div class="text-center">
            <a href="<?=base_url();?>members/vote-komunitas/<?=$info['id_komunitas'];?>" class="btn btn-success btn-sm btn-fill"><i class="ti-heart"></i> VOTE</a>
          </div>

  			</div>
			</div>
		</div>
	</div>
</div>
