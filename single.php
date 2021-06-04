<?php
get_header();
?>
<div class="container">
    <div class="row">
    <main id="primary" class="site-main col-lg-9">
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
     if (get_the_post_thumbnail_url()) :?>
    <img src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top" alt="...">
 <?php endif;  
        the_title( '<h1>', '</h1>' ); 
        the_content();
    endwhile; 
else: 
   
endif; 
?>

</main>
<aside class="site-main col-lg-3">
<?php get_sidebar();?>
</aside>
    </div>
</div>
<?php

get_footer();