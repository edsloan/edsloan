<?php

function edsloan_comment_list($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<ul <?php comment_class(); ?> id="ul-comment-<?php comment_ID() ?>">
    	<div id="comment-<?php comment_ID(); ?>">
        	<div id="comment-author-vcard" class="one column">
            	<?php echo get_avatar($comment,60); ?>
            </div>
            <div id="comment-text" class="eleven columns">
                <?php if ($comment->comment_approved == '0') : ?>
				<em>Your comment is awaiting moderation.</em>
				<?php endif; ?>
				<?php comment_text(); ?>
            </div>
            <div id="comment-info" class="twelve columns">
                <h6>Posted by <a href="<?php echo htmlspecialchars( get_comment_link( $comment->current_ID ) ) ?>">
                <?php comment_author_link(); ?></a> on <?php comment_date(); ?> at <?php comment_time(); ?>.
                <?php edit_comment_link('Edit', ' | ', ' ') ?>
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'login_text' => 'Log In to Reply'))) ?></h6>
            </div>
         </div>
    </ul><br />
<?php } ?>