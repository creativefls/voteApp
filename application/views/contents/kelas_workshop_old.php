<div class="container-fluid">
    <div class="row">
      

        <!-- getList Data Kelas Workshop -->
        <?php
            foreach ($list_kelas as $data) {
              ?>
              <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="card">
                      <div class="content">
                          <div class="row">
                              <div class="col-xs-4">
                                  <img class="img-voting" src="<?=$data['gambar_logo'];?>" alt="<?=$data['nama_kelas'];?>">
                              </div>
                              <div class="col-xs-8">
                                  <div class="numbers">
                                      <p>Kelas</p>
                                      <?=$data['nama_kelas'];?>
                                  </div>
                              </div>
                          </div>
                          <div class="footer">
                              <hr />
                              <div class="stats">
                                  <div class="col-xs-12">
                                    <div class="col-xs-6">
                                      <i class="ti-ruler-pencil"></i> <strong> <?=$idea_dev['jumlah'];?>/49</strong>
                                    </div>
                                    <div class="col-xs-6">
                                      <a href="#" class="btn btn-danger btn-xs btn-fill btn-wd btn-block">Penuh</a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <?php
            }
          ?>
        <!-- end of list kelas workshop -->
    </div>
</div>
