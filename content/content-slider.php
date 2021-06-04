<div id="carouselExampleCaptions" class="pb-5 carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <?php 
  $args = array( 
    'posts_per_page' => 3, 
    'post_type' => 'post', 
    'post_status' => 'publish' 
);
$loop =new WP_Query( $args );
if($loop->have_posts()):
    $i=0;
    while($loop->have_posts()):
        $loop->the_post();

$active=$i<=0?'active':'';
$i++;
if(get_the_post_thumbnail_url()){
  ?>


<div class="carousel-item <?php echo $active;?>">
      <img src="<?php echo get_the_post_thumbnail_url();?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3><?php echo get_the_title( );?></h3>
      
      </div>
    </div>

<?php 
};
endwhile;
endif;

?>

  
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>