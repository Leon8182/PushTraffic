<?php
    get_header();
?>
<main id="content" class="container">

<?php
    echo '<h1>' . __('Hmm, das funktioniert wohl nicht', 'wifi') . '</h1>';
    echo '<p>' . __('Probier es am besten später nochmal', 'wifi') . '</p>';

    echo '<a href="' . esc_url(home_url()) . '" class="btn">' . __('Zur Startseite', 'wifi') . '</a>';

?>
</main>


<?php
get_footer();
?>