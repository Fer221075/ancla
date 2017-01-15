<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ancla
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'ancla' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'ancla' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'ancla' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'ancla' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback' => 'ancla_theme_comment'
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'ancla' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'ancla' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'ancla' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ancla' ); ?></p>
	<?php
	endif;

	//Default comment form:
	comment_form();

	// Custom comment form:
//	$fields =  array(
//
//		'author' => '<div class="comment-data clearfix"><div class="col-sm-4 no-pad form-input">'.
//			'<input type="text" placeholder="Nombre" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) .'">'.
//			'</div>',
//
//		'email' =>
//			'<div class="col-sm-4 no-pad form-input">' .
//			'<input type="text" placeholder="E-mail" name="email" id="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '">' .
//			'</div>',
//
//		'url' =>
//			'<div class="col-sm-4 no-pad form-input">'.
//			'<input type="text" placeholder="Sitio web" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '">'.
//			'</div></div>',
//	);
//
//	$args = array(
//		'id_form'           => 'commentform',
//		'class_form'      => 'comment-form',
//		'id_submit'         => 'submit',
//		'class_submit'      => 'submit',
//		'name_submit'       => 'submit',
//		'title_reply'       => '',
//		'title_reply_to'    => __( 'Leave a Reply to %s' ),
//		'cancel_reply_link' => __( 'Cancel Reply' ),
//		'label_submit'      => __( 'Post Comment' ),
//		'format'            => 'xhtml',
//		'logged_in_as'		=> '',
//		'comment_notes_before' => '',
//		'comment_field' =>  '<textarea placeholder="Escriba su comentario acá..." name="comment" id="comment" class="comment-text"></textarea>',
//		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
//	);
//
//	comment_form($args);
	?>

</div><!-- #comments -->
