<?php
?>
<header class="p-3 text-dark bg-light">
    <div class="container">
      <div class="row">
      <div class="col-3">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
       
      if ( has_custom_logo() ) {
          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
      } else {
          echo ' <a class="navbar-brand" href="'. get_bloginfo('url') .'">' . get_bloginfo('name') . '</a>';
      }
      ?>  
      
      </div>

        <nav class="col-9 navbar navbar-expand-lg">
  <div class="container-fluid justify-content-end">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
    <i class="bi bi-list"></i>
    </button>
    
      
      <?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary',
        'menu_class'=>' navbar-nav',
        
        'container_class'=>'collapse navbar-collapse justify-content-lg-end',
        'container_id'=>'primary-menu'
        //'items_wrap'           => '<ul id="%1$s" class="navbar-nav">%3$s</ul>'
        
    )
);
?>
    
  </div>
</nav>

        
      </div>
    </div>
  </header>