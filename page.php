<?php
get_header();
?>


<?php
while ( have_posts() ) :
    the_post();

  ?>
  <header class="entry-header">
      <div class="overlay-header">
            <div class="overlay-text-content">
                <?php the_title( '<h1 class="title-overlay-header">', '</h1>' ); ?>

            </div>
          <?php if(get_the_post_thumbnail_url()){
              echo '<img src="'.get_the_post_thumbnail_url().'" class="d-block w-100" alt="...">';
            };?>
            </div>
	</header><!-- .entry-header -->
    <main id="primary" class="site-main">
        <div class="container pt-3 pb-5">
            <div class="row">
                <div class="col-12">
                <?php echo get_the_content(  );?>
                </div>
            </div>
        </div>
    </main><!-- #main -->
  <?php


endwhile; // End of the loop.
?>


<?php
get_footer();