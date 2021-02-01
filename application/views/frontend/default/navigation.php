<?php
$header_logo = $this->frontend_model->get_frontend_general_settings('header_logo');
?>
<header>
    <div class="logo-area">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col">
                    <div class="logo-container text-center">
                      <a href="<?php echo site_url('home');?>">
                          <img src="<?php echo base_url();?>uploads/frontend/<?php echo $header_logo;?>" alt="" width="100">
                          <h2><?php echo $school_title; ?></h2>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="menu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

         
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
