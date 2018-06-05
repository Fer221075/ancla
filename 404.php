<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ancla
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <h2>Lo sentimos, la página que busca no existe</h2>
            <a href="<?php echo home_url() ?>" class="ancla-btn">Ir al inicio</a>
        </div>
    </div>

<?php
get_footer();
