<div class="container-fluid">
	<div class="row">

		<!-- contoh kelas penuh -->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="card">
				<div class="header">
					<h5 class="title"><i class="ti-cup"></i> Vote Komunitas</h5><br>
				</div>
        <div class="content table-responsive table-full-width">
					<table class="table table-striped">
            <thead>
              <th>No</th>
              <th>Komunitas</th>
              <th>Total</th>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($komunitas as $data) {
                $no++;
                ?>
                <tr>
                  <td><?=$no;?></td>
                  <td><?=$data['nama_komunitas'];?></td>
                  <td><button class="btn btn-sm btn-danger"><?=$data['jumlah'];?></button></td>
                </tr>
                <?php
              } ?>
            </tbody>
          </table>
				</div>
			</div>
		</div>
	</div>
</div>
