<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title', 'twisty' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
        
        <!-- <ol class="comment-list"> -->
            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 86,
                ) );
            ?>
        <!-- </ol>.comment-list -->
 
        <?php
            // Are there comments to navigate through?
             if ( get_comment_pages_count() > 1  ) :
        ?>
        <nav class=" comment-navigation" role="navigation">
            <h1 class=""><?php esc_html_e( 'Comment navigation', 'twisty' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twisty' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twisty' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'twisty' ); ?></p>
        
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php
  $form_args = array(
          'label_submit'=>'Send',
          'title_reply'=>'Write a Reply or Comment',
          'comment_notes_after' => '',
          'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'twisty' ) . '</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
  );

  comment_form($form_args);
?>
 
</div><!-- #comments -->