<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Daftar Makan Peserta</h4>
					<p class="category">Kelas <b><?=$makan['nama_makanan'];?></b>
					</p><br>
				</div>
				<div class="content table-responsive table-full-width">
					<table class="table table-striped">
            <thead>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($peserta as $data) {
                $no++;
                ?>
                <tr>
                  <td><?=$no;?></td>
                  <td><?php echo $data['first_name'].' '.$data['last_name']; ?></td>
                  <td><?=$data['email'];?></td>
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
