<?php

/* Template Name: Template Nosotros */

get_header(); ?>

<section class="cover-slides">

    <?php
    $gallery = CFS()->get( 'gallery' );

    foreach ($gallery as $image): ?>

        <div class="cover slide bg-img">
            <img src="<?php echo $image['image']?>" alt="soporte">
        </div>

    <?php endforeach; ?>
</section>

<div class="red-section-header no-triangle">
    <div class="container">
         <h3>Nosotros<span><img src="<?php echo get_template_directory_uri();?>/img/mini_icono_contacto.png"></span></h3>
    </div>
</div>

<?php

$loop = CFS()->get( 'tabs' );
$first = true;
?>

<section class="container">
    <nav class="row tab-anchors">
        <ul class="clearfix">
            <?php
            foreach ( $loop as $row ) {

                $anchor = strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $row['tab_title']));

                ?>

                <li>
                    <a href="#<?php echo $anchor ?>" class="tab-anchor smooth-anchor <?php if ( $first ): ?>current<?php endif; ?>"><?php echo $row['tab_title'] ?></a>
                </li>

                <?php
                $first = false;
            }
            ?>
        </ul>
    </nav>

    <?php
    foreach ( $loop as $row ) {

        $anchor = strtolower(preg_replace('/[^a-zA-Z0-9-_\.]/','', $row['tab_title']));

        ?>

        <section id="<?php echo $anchor ?>" class="row us-section">
                <h3><?php echo $row['tab_title'] ?></h3>
                <?php echo $row['tab_content'] ?>
        </section>

        <?php
        $first = false;
    }
    ?>

</section>

<?php
get_footer();
?>