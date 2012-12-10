<?php get_header(); ?>
<!--start: content-wrapper-->
<div id="content-wrapper">
	<!--start: content-top-->
  	<div id="content-top" class="container_12">
		<h1 class="grid_4">blog</h1>
  	</div><!--content-top: end-->
    
    <!--start: content-text-wrapper-->
    <div id="content-text-wrapper">    
        <!--start: content-text-->
        <div id="content-text" class="container_12">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!--start: post-->
                    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <!--start: content-text-postheader-->
                        <div id="content-text-post-header" class="grid_12">
                            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>">
                            <?php the_title(); ?></a></h2>
                            <h6>Posted on <?php the_date(); ?> by <?php the_author(); ?>.</h6>
                        </div><!--content-text-postheader: end-->
                        
                        <br /><br />
                          
                        <!--start: postcontent-->
                        <div id="postcontent" style="border-bottom: 1px solid #ccc;">
                          <?php the_content('Continue reading →'); ?>
                          <br />
                        </div><!--postcontent: end-->
                        
                        <br /><br />
                        
                    </div><!--post: end-->
                    
                    <br /><br /><br />
                <?php endwhile;	?>
                
                <!--start: index-nav-->
                <div id="index-nav">
                    <div class="grid_6"><?php previous_posts_link('← Newer posts '); ?></div>
                    <div class="grid_6" style="float:right; text-align:right;"><?php next_posts_link('Older posts →'); ?></div>
                </div><!--index-nav: end-->
            <?php else : ?>
            
            <?php endif; ?>
        </div><!--content-text: end-->
  </div><!--content-text-wrapper: end-->
</div><!--content-wrapper: end-->
<?php get_footer(); ?>