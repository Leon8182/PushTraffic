<article class="post">
    <h3 class="post-title">
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <div class="meta">
        <time class="date" datetime="<?php the_time('Y-m-d'); ?>">
            <?php the_time('d.m.Y'); ?>
        </time>
        <?php
        the_category(' | ');
        ?>
        <?php the_date('');?>

        <?php
        //Gibt das Beitragsbild aus
        // the_post_thumbnail();
        ?>
    </div>
</article>