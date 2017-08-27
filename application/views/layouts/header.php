<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url();?>">
              <img class="c-logo" src="<?=base_url();?>assets/img/logo/fls-logo-baru.png" alt="FLS Logo">
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"> <i class="ti-user"></i> <p>Hai, <?=$user->first_name;?> !</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
