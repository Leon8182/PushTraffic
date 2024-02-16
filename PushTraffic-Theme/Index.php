<?php
get_header();
?>

<main id="content" class="container">
    <h1 class="is-style-headline">
        <?php
        $pagePosts = get_option('page_for_posts');

        if (!empty($pagePosts)) {
            echo get_the_title($pagePosts);
        } else {
            bloginfo('name');
        }

        ?>
    </h1>
    <?php
    the_archive_description('<p>', '</p>');
    ?>

    <?php
    
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