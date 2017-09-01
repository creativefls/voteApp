<div class="container-fluid">
    <div class="row">

      <?php
      $info = $this->session->flashdata('pesan');
      if (isset($info)) {
        ?>
        <!-- pesan dari Admin -->
        <div class="col-md-12">
          <div class="alert alert-warning">
              <button type="button" aria-hidden="true" class="close">×</button>
              <span><b> Informasi - </b> <?=$info;?></span>
          </div>
        </div>
        <?php
      } ?>

        <!-- voting komunitas -->
        <?php
        if ($user->id_komunitas == NULL) {
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

          echo "kamu memilih ".$komunitas['nama_komunitas'];
        }
          ?>
        <!-- end of list kelas workshop -->
    </div>
</div>
