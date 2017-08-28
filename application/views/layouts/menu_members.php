<?php $page = $this->uri->segment(2); ?>
<div class="sidebar-wrapper">
      <div class="logo">
          <a href="#" class="simple-text">
              Delegates
          </a>
      </div>

      <ul class="nav">
          <li <?php if($page==""){echo 'class="active"';}?>>
              <a href="<?=base_url();?>">
                  <i class="ti-panel"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li <?php if($page=="kelas_workshop"){echo 'class="active"';}?>>
              <a href="<?=base_url();?>members/kelas_workshop">
                  <i class="ti-user"></i>
                  <p>Kelas Workshop</p>
              </a>
          </li>
          <li <?php if($page=="voting_komunitas"){echo 'class="active"';}?>>
              <a href="<?=base_url();?>members/voting_komunitas">
                  <i class="ti-thumb-up"></i>
                  <p>Voting Komunitas</p>
              </a>
          </li>
          <li <?php if($page=="informasi"){echo 'class="active"';}?>>
              <a href="<?=base_url();?>members/informasi">
                  <i class="ti-announcement"></i>
                  <p>Informasi</p>
              </a>
          </li>
          <li>
              <a href="<?=base_url();?>auth/logout">
                  <i class="ti-lock"></i>
                  <p>Logout</p>
              </a>
          </li>
      </ul>
</div>
