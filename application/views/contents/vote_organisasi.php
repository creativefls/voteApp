<div class="container-fluid">
    <div class="row">

      <?php


  			$data['pesan']	= $this->session->flashdata('pesan');
  	    if (isset($data['pesan'])) {
  				$this->load->view('contents/notifikasi', $data);
  	    } ?>

        <!-- voting komunitas -->
        <?php
        if ($is_buka['hasil'] == 0) {
          // jika vote belum dibuka
          $this->load->view('contents/konten_belum_dibuka');
        }
        else {
          if ($user->id_komunitas == NULL) {
            // informasi tidak bisa dirubah
            $this->load->view('contents/info_tidak_bisa_dirubah');
            foreach ($list_organisasi as $data) {
              ?>
              <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="card">
                      <div class="content">
                          <div class="row">
                              <div class="col-xs-12">
                                  <div class="numbers" style="text-align:center">
                                      <p>Komunitas</p>
                                      <?=$data['nama_komunitas'];?>
                                  </div>
                              </div>
                          </div>
                              <hr />
                              <div class="row">
                                <div class="text-center">
                                  <div class="col-xs-12">
                                       <a href="<?=base_url();?>members/detail/komunitas/<?=$data['id_komunitas'];?>" class="btn btn-info btn-sm"><i class="ti-search"></i> Selengkapnya</a>

                                        <a href="<?=base_url();?>members/vote-komunitas/<?=$data['id_komunitas'];?>" class="btn btn-success btn-sm btn-fill"><i class="ti-heart"></i> VOTE</a>
                                    </div>
                                </div>
                              </div>
                      </div>
                  </div>
              </div>
              <?php
            }
          }
          // jika user sudah memilih..
          else {
            $komunitas =  $this->MainModel->getRowDataWhere('users,komunitas','*','users.id_komunitas = komunitas.id_komunitas AND users.id = '.$user->id.'');

            ?>
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
              <div class="card card-user">
                  <div class="image">
                      <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="FLS header logo">
                  </div>
                      <div class="author">
                        <img class="avatar border-gray" src="<?=$komunitas['gambar_logo'];?>" alt="<?=$komunitas['nama_komunitas'];?>">
                        <h4 class="title"><?=$komunitas['nama_komunitas'];?><br>
                          <small><?=$komunitas['email'];?></small>
                        </h4>

                      </div>
                      <hr>
                      <p class="description text-left" style="padding: 0em 1em 0em 2em;">
    	                    Berikut Hasil pilihanmu,<br><br>
    											<i class="ti-user"></i> <strong><?=$komunitas['first_name'];?></strong> <br>
    											<i class="ti-medall"></i> <strong><?=$komunitas['nama_komunitas'];?></strong> <br>
    											<br><i class="fa fa-heart"></i> Terima kasih telah melakukan voting
    	                </p><br>
              </div>
            </div>
            <?php
          }
        } ?>
        <!-- end of list kelas workshop -->
    </div>
</div>
