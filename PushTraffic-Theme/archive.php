<?php

?>


<?php
get_header();
?>

<main id="content" class="container">
    <h1 class="is-style-headline">
        <?php

        if(is_category()){
            single_cat_title();
        } else{
            the_archive_title();
        }

        ?>
    </h1>
    <?php
    the_archive_description('<p>', '</p>');
    ?>

    <?php
    // Standard WP Schleife
    // if(have_posts()){
    //     while(have_posts()){
    //         the_post();
    //         //Eigener Content
    //         the_title();
    
    //     }
    // }
    ?>

    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();

            include(locate_template('components/news_article.php'));

        endwhile;
    else: ?>
        <h2>
            <?php _e('Es wurden keine Beiträge gefunden', 'wifi'); ?>
        </h2>
    <?php endif; ?>

    <nav class="pagination">

        <?php
        echo paginate_links(
            array(
                'prev_text' => '<span class="icon-arrow-left" aria-label="' . __('Vorherige Seite', 'wifi') . '"></span>',
                'next_text' => '<span class="icon-arrow-right" aria-label="' . __('Nächste Seite', 'wifi') . '"></span>',
            )
        );
        ?>
    </nav>
</main>




<?php
get_footer();
?>