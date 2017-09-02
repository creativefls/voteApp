<?php $page = $this->uri->segment(2); ?>
<div class="sidebar-wrapper">
      <div class="logo">
          <a href="<?=base_url();?>" class="simple-text">
              Rangers
          </a>
      </div>

      <ul class="nav">
          <li <?php if($page==""){echo 'class="active"';}?>>
              <a href="<?=base_url();?>">
                  <i class="ti-panel"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li <?php if($page=="list_workshop"){echo 'class="active"';}?>>
              <a href="<?=base_url();?>adminController/list_workshop">
                  <i class="ti-agenda"></i>
                  <p>Kelas Workshop</p>
              </a>
          </li>
          <li <?php if($page=="list_komunitas"){echo 'class="active"';}?>>
              <a href="<?=base_url();?>adminController/list_komunitas">
                  <i class="ti-bar-chart"></i>
                  <p>Hasil Voting</p>
              </a>
          </li>
          <!-- INDRA KUSUMA ONLY -->
          <?php if ($user->id == 4) { ?>
            <li  <?php if($page=="bukaTutupKelas"){echo 'class="active"';}?>>
                <a href="<?=base_url();?>rangers/bukaTutupKelas">
                    <i class="ti-settings"></i>
                    <p>Buka-Tutup Kelas</p>
                </a>
            </li>
            <?php
          } ?>
          <li>
              <a href="<?=base_url();?>auth/logout">
                  <i class="ti-lock"></i>
                  <p>Logout</p>
              </a>
          </li>
      </ul>
</div>
