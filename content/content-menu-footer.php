<?php
?>
<footer id="colophon" class="py-3 mt-auto text-white site-footer footer bg-dark">
<div class="footer-top">
<?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-2',
        'menu_id'        => 'footer-menu',
        'menu_class'=>'',
        
    )
);
?>
</div>
<div class="container">
    <p class="mb-0 text-center text-muted">Todos los derechos reservados 2021</p>
  </div>
	</footer><!-- #colophon -->