<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ancla
 */

if ( !function_exists( 'ancla_pagination' ) ):
    function ancla_pagination() {
        ?>
        <div class="pagination">
            <?php
            global $wp_query;
            $total = $wp_query->max_num_pages;
            // only bother with the rest if we have more than 1 page!
            if ( $total > 1 )  {
                // get the current page
                if ( !$current_page = get_query_var('paged') )
                    $current_page = 1;
                // structure of "format" depends on whether we're using pretty permalinks
                if( !get_option('permalink_structure') ) {
                    $format = '&paged=%#%';
                } else {
                    $format = 'page/%#%/';
                }
                echo paginate_links(array(
                    'base'     => get_pagenum_link(1) . '%_%',
                    'format'   => $format,
                    'current'  => $current_page,
                    'total'    => $total,
                    'prev_text' => '<i class="fa fa-chevron-left"></i>',
                    'next_text' => '<i class="fa fa-chevron-right"></i>',
                    'mid_size' => 4,
                    'type'     => 'list'
                ));
            }
            ?>
        </div>
        <?php
    }
endif;

if ( ! function_exists( 'ancla_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function ancla_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Publicado el %s', 'post date', 'ancla' ), $time_string
	);

	$byline = sprintf(
		esc_html_x( 'por %s', 'post author', 'ancla' ),
		'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'ancla_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function ancla_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'ancla' ) );
		if ( $categories_list && ancla_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'ancla' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'ancla' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'ancla' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'ancla' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'ancla' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists('ancla_category_actions') ) :

function ancla_category_actions($term) {
    ?>

    <div class="category-data">
        <p class="category-description"><?php echo $term->description; ?></p>
    </div>
    <ul class="category-actions">
        <li class="category-action">
            <a href="<?php echo get_home_url() . '/contacto/?asunto=Contactar%20un%20asesor'; ?>"><img src="<?php echo get_template_directory_uri() . '/img/icono_asesor.png' ?>" alt=""></a>
            <span><strong>Contacte</strong> un asesor</span>
        </li>
        <li class="category-action">
            <a href="<?php echo get_home_url() . '/contacto/?asunto=Solicitar%20Cotización'; ?>"><img src="<?php echo get_template_directory_uri() . '/img/icono_cotizacion.png' ?>" alt=""></a>
            <span><strong>Solicite</strong> cotización</span>
        </li>
    </ul>

    <?php
}

endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function ancla_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'ancla_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'ancla_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so ancla_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so ancla_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in ancla_categorized_blog.
 */
function ancla_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'ancla_categories' );
}
add_action( 'edit_category', 'ancla_category_transient_flusher' );
add_action( 'save_post',     'ancla_category_transient_flusher' );
