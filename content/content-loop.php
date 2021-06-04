<div class="container">
    <div class="row">
<?php

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      echo get_template_part( 'content/content','card' );
    endwhile; 
endif; 
?>
</div>
</div>