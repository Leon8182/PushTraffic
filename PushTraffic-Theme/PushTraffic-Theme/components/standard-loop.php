<?php
    //Standard-WP Schleife
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            //Gutenberg-Editor
            the_content();
        }
    }