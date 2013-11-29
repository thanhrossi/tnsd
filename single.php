<?php get_header(); ?>  
<div class="row main">
		<div class="large-8 columns content">
			<?php if (have_posts()) : ?>  
		    <?php while (have_posts()) : the_post(); ?>  
		        <div <?php post_class(); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<p class="left">
						<?php the_content('đây là bài viết'); ?>
					</p>
					
		        </div>
		    <?php endwhile; ?>  
		    
		    <?php else : ?>  
		    //Something that happens when a post isn’t found.  
			<?php endif; ?>

		</div>

  
<?php get_footer(); ?> 

	