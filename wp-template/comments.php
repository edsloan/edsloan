<?php
/**
 * @package WordPress
 * @subpackage Ed Sloan
 */

// Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<h4 class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'kubrick'); ?></h4> 
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<div id="responses">
		<h5 class="twelve columns"><?php comments_number(__('No Responses', 'edsloan'), __('One Response', 'edsloan'), __('% Responses', 'edsloan'));?> <?php printf(__('to &#8220;%s&#8221;', 'edsloan'), the_title('', '', false)); ?></h5><br />
	</div>
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol>
	<?php wp_list_comments('type=comment&callback=edsloan_comment_list');?>
	</ol>

	<div class="navigation">
		<div class="twelve columns alignleft"><?php previous_comments_link() ?></div>
		<div class="twelve columns alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<h5 class="nocomments"><?php _e('Comments are closed.', 'edsloan'); ?></h5>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?><br />

<div id="responses">

<h5 class="twelve columns"><?php comment_form_title( __('Leave a Reply', 'edsloan'), __('Leave a Reply for &nbsp; %s' , 'edsloan') ); ?></h5>

<h6 class="twelve columns"><?php cancel_comment_reply_link('&rarr; Cancel Reply') ?></h6>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'edsloan'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<h6 id="comment-notes" class="twelve columns"><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.', 'edsloan'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account', 'edsloan'); ?>"><?php _e('→ Log out', 'edsloan'); ?></a></h6>
<br />
<?php else : ?>
<p id="comment-notes" class="twelve columns"><small>Your email address will not be published. Required fields are marked <span class="required">*</span></small></p>
<div class="four columns">
<p class="comment-form-author"><label for="author"><?php if ($req) _e('Name', 'edsloan'); ?>*</label><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</p>
</div>
<div class="four columns">
<p class="comment-form-email"><label for="email"><?php if ($req) _e('Email', 'edsloan'); ?>*</label><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
</p>
</div>
<div class="four columns">
<p class="comment-form-url"><label for="url"><?php _e('Website', 'edsloan'); ?></label><input type="text" name="url" id="url" value="<?php echo  esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
</p>
</div>
<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>', 'edsloan'), allowed_tags()); ?></small></p>-->
<div class="twelve columns">
<p id="comment-form-comment"><label for="comment">Comment</label><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
</div>
<p id="comment-notes" class="twelve columns"><small>Please wrap any code snippets in <code>[code]</code>&hellip;<code>[/code]</code></small>.</p>
<p id="form-submit" class="twelve columns"><input name="submit"  class="two columns contact-submit" type="submit" id="submit" tabindex="5" value="<?php _e('Post Comment', 'edsloan'); ?>" />
<?php comment_id_fields(); ?> 
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
