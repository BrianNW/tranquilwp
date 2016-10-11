<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php wp_title(''); ?></title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700,300" rel="stylesheet">
      
    <!-- Fontawesome link -->  
    <script src="https://use.fontawesome.com/1caaaaf18a.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <?php wp_head(); ?>  
      
  </head>
  <body> <?php body_class(); ?>
    
      
      <!-- === HEADER === -->
      
      <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    
                    <a href="<?php echo esc_url(home_url() );?>" class="navbar-brand"> <?php echo get_bloginfo('name'); ?> </a>
                </div> <!-- /navbar-header -->
                
                <div class="collapse navbar-collapse">
                   
                <?php
                    wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
                       );
                 ?>
                
                </div> <!-- /navbar-collapse -->
                
                
            </div>  <!-- /container fluid -->
          
        </nav>
          
          <!-- === FEATURE SECTION === -->
          <div class="container-fluid">
            <div class="row feature">
              <img src="images/lakebg.jpg" alt="lake background">
              <div class="feature-text col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
                    <p> FULLY RESPONSIVE<br> PREMIUM SPA THEME<br> FOR WORDPRESS.</p>
                </div><!-- /feature text -->              
            </div><!-- /row -->            
          </div><!-- /container fluid -->
      
      </header>