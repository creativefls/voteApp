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
                              <div class="col-xs-4">
                                  <img class="img-voting" src="<?=$data['gambar_logo'];?>" alt="<?=$data['nama_komunitas'];?>">
                              </div>
                              <div class="col-xs-8">
                                  <div class="numbers">
                                      <p>Kelas</p>
                                      <?=$data['nama_komunitas'];?>
                                  </div>
                              </div>
                          </div>
                              <hr />
                              <div class="row">
                                <div class="text-center">
                                    <div class="col-xs-12">
                                        <a href="<?=base_url();?>MemberController/vote/<?=$user->id;?>/<?=$data['id_komunitas'];?>" class="btn btn-primary btn-fill btn-sm btn-block"><i class="fa fa-check-circle"></i>Vote <?=$data['nama_komunitas'];?></a>
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
                      <p class="description text-center" style="padding:1em;">
                          Halo <?=$komunitas['first_name'];?>! kamu telah melakukan voting pada komunitas  <strong><?=$komunitas['nama_komunitas'];?></strong>.<br> Terima kasih telah berpartisipasi Young Leaders!<br>
                      </p><br>
              </div>
            </div>
            <?php
          }
        } ?>
        <!-- end of list kelas workshop -->
    </div>
</div>
