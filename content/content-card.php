<?php
?>
<div class="mb-3 col-xl-6" >
 
  <div class=" card" >
 <?php if (get_the_post_thumbnail_url()) :?>
    <img src="<?php echo get_the_post_thumbnail_url();?>" class="card-img-top" alt="...">
 <?php endif;?>
  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title( );?></h5>
    <p class="card-text"><?php echo pietergoosen_custom_excerpts(20);?></p>
    <a href="<?php echo get_post_permalink(); ?>" class="btn btn-primary">Conocer más</a>
  </div>
</div>
</div>