<footer id="footer-page" class="container columns">
    <ul class="social-links column">

        <?php
        dynamic_sidebar('sidebar-footer');
        ?>

    </ul>
    <nav id="nav-footer" class="column">
        <?php

        wp_nav_menu(
            array(
                'theme_location' => 'footer',
                'menu_class' => 'nav-menu',
                'container' => false,
                'fallback_cb' => false,
                'depth' => 1
            )
        );

        ?>
    </nav>
    <div class="copyright column">

        <?php
        echo sprintf(__('&copy; %1$s, %2$s'), date('Y'), get_bloginfo('name'));
        ?>

    </div>
</footer>
<div id="to-top">
    <?php _e('Top', 'wifi'); ?>
</div>
<!-- <script src="assets/js/scripts.js"></script> -->
<?php
wp_footer();
?>
</body>

</html>