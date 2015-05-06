<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

#-----------------------------------------------------------------#
# Creating new Comment List Template
#-----------------------------------------------------------------#

function gg_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }

    //if ('div' != $args['style']) : ?>
    <?php global $smof_data; ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">

        <?php //endif; ?>

        <div class="comment-author vcard">
            <div class="avatar">
                <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, 60); ?>
            </div>
            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
            <div class="comment_info">
                <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>', 'GoGetThemes'), get_comment_author_link()) ?>

                <div class="comment-meta commentmetadata"><a
                        href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
                        <?php
                        /* translators: 1: date, 2: time */
                        printf(__('%1$s at %2$s', 'GoGetThemes'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)', 'GoGetThemes'), '  ', '');
                    ?>
                </div>
            </div>

        </div>

        <?php if ($comment->comment_approved == '0') { ?>

            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'GoGetThemes') ?></em>

            <br/>

        <?php } ?>

        <div class="clear"></div>

        <div class="comment_entry">
            <?php comment_text() ?>
        </div>

    </div>

<?php
}



// Do not delete these lines

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
    die ('Please do not load this page directly. Thanks!');
}

if (post_password_required()) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','GoGetThemes'); ?></p>
    <?php  return;
}
?>





    <!-- You can start editing here. -->
    <div id="comments">
        <h3>
            <?php comments_number(__('No Comments','GoGetThemes'), __('1 Comment','GoGetThemes'), __('% Comments','GoGetThemes')); ?>
        </h3>
    </div>



<?php if (have_comments()) : ?>
    <div class="clear"></div>
    <div class="commentlist">
        <?php wp_list_comments('type=comment&callback=gg_comment'); ?>
    </div>
    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
    </div>

<?php else : // this is displayed if there are no comments so far ?>
    <?php if (comments_open()) : ?>
        <!-- If comments are open, but there are no comments. -->
    <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments"><?php _e('Comments are closed.','GoGetThemes'); ?></p>
    <?php endif;
endif;




if (comments_open()) :
    $args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'submit',
        'title_reply'       => __( 'Leave a Reply', 'GoGetThemes' ),
        'title_reply_to'    => __( 'Leave a Reply to %s', 'GoGetThemes' ),
        'cancel_reply_link' => __( 'Cancel Reply', 'GoGetThemes' ),
        'label_submit'      => __( 'Post Comment', 'GoGetThemes' ),

        'comment_field' =>  '
            <div class="row-fluid"><div class="span8">
                <textarea class="span12 black" id="comment" name="comment" placeholder="Comment">'.'</textarea>
            </div></div>',

        'must_log_in' =>
        '<p class="must-log-in">' .
            sprintf(
                __( 'You must be <a href="%s">logged in</a> to post a comment.', 'GoGetThemes' ),
                wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
            ) .
        '</p>',

        'logged_in_as' =>
        '<p class="logged-in-as">' .
            sprintf(
                __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'GoGetThemes' ),
                admin_url( 'profile.php' ),
                $user_identity,
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
            ) .
        '</p>',

        'comment_notes_before' =>
        '<p class="comment-notes">' .
            __( 'Your email address will not be published.', 'GoGetThemes' ) .
        '</p>',

        'comment_notes_after' =>
        '<p class="form-allowed-tags">' .
            sprintf(
                __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'GoGetThemes' ),
                ' <code>' . allowed_tags() . '</code>'
            ) .
        '</p>',

        'fields' => apply_filters( 'comment_form_default_fields', array(

                'author' => '<div class="row-fluid">
                                <div class="span4">
                                    <input class="span12 black" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" placeholder="Name" />',

                'email' =>          '<input id="email" class="span12 black" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" placeholder="Email" />',

                'url' =>            '<input class="span12 black" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" placeholder="Website" />
                                </div>
                            </div>'
            )
        ),
    );
    comment_form($args);
endif;