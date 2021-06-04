<?php
get_header();
?>
<div class="container">
    <div class="row">
    <main id="primary" class="site-main col-lg-9">
<?php 
echo get_template_part( 'content/content','loop' );
?>
</main>
<aside class="site-main col-lg-3">
<?php get_sidebar();?>
</aside>
    </div>
</div>
<?php

get_footer();