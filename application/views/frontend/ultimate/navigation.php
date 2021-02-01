<?php
  $header_logo  = $this->frontend_model->get_frontend_general_settings('header_logo');
  $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row('description');
?>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--bg-transparent u-header--white-nav-links-md u-header--sub-menu-dark-bg-md u-header--abs-top"
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <div class="u-header-center-aligned-nav__col">
            <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="<?php echo site_url('home');?>">
              <img src="<?php echo base_url();?>uploads/frontend/<?php echo $header_logo;?>" 
                style="height:35px; width:35px;" />
              <span class="u-header__navbar-brand-text"><?php echo $system_name; ?></span>
            </a>
            <!-- End Logo -->

            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="navBar"
                    data-toggle="collapse"
                    data-target="#navBar">
              <span id="hamburgerTrigger" class="u-hamburger__box">
                <span class="u-hamburger__inner"></span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
          </div>

 

        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->