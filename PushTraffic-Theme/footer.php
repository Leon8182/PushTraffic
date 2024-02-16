<footer id="footer-page" class="container columns">
    


        <?php
        dynamic_sidebar('sidebar-footer');
        ?>

 



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


<?php
wp_footer();
?>
</body>

</html>