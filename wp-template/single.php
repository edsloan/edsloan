<?php get_header(); ?>
<div id="content" class="container">
 <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!--start: postid-->
                    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <!--start: content-text-post-header-->
                        <div id="content-text-post-header" class="twelve columns">
                            <h2><?php the_title(); ?></h2>
                            <h6><?php the_date(); ?>.</h6>
                        </div><!--content-text-post-header: end-->
                                           
                        <!--start: postcontent-->
                        <div id="postcontent" class="twelve columns">
                            <p><?php the_content('Continue reading →'); ?></p>
                        </div><!--postcontent: end-->
                        
                        <!--start: share-buttons-->
                        <div id="share-buttons">
                            <ul>
                                <li class="two columns">
                                    <a class='twitter-share-button' data-count='horizontal' data-lang='en' data-via="edsloan88" data-text="<?php the_title(); ?>" data-url="<?php the_permalink(); ?>" href='http://twitter.com/share' rel='nofollow'>Tweet</a>
                                </li>
                                
                                <li class="two columns">
                                	<iframe class="fbook" src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=160&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0">
									</iframe>
                                </li>
                                
                                <li class="two columns">
                                    <a class="g-plusone" data-size="medium" data-annotation="none"></a>
                                </li>
                                
                                <li class="two columns">
                                    <?php edit_post_link('&rarr; Edit Post'); ?>
                                </li>
                            </ul>
                        </div><!--share-buttons: end-->
                                                
                        <div class="twelve columns"><?php next_post_link('&larr; %link'); ?></div>
                        
                        <div class="twelve columns" style="text-align:right"><?php previous_post_link('%link &rarr;'); ?></div>
                        
                        <!--start: comments-->
                        <div id="comments" >
                        	<?php comments_template(); ?>
                        </div><!--comments: end-->
                    </div><!--postid: end-->
                <?php endwhile;	?>
            <?php else : ?>
            
			<?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>