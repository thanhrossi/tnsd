<?php get_header(); ?>  
<div class="row">
	<div class="columns large-12">
		
		<img data-interchange="[<?php bloginfo('stylesheet_directory'); ?>/images/smallest.jpg, (default)], [<?php bloginfo('stylesheet_directory'); ?>/images/smallest.jpg, (screen and (max-width: 568px))], [<?php bloginfo('stylesheet_directory'); ?>/images/small.jpg, (small)], [<?php bloginfo('stylesheet_directory'); ?>/images/med.jpg, (medium)], [<?php bloginfo('stylesheet_directory'); ?>/images/large.jpg, (large)]">
	</div>
</div>
<div class="row main">
		<div class="large-8 columns content">
			<?php $custom_query = new WP_Query('cat=-17'); // exclude category 9
			while($custom_query->have_posts()) : $custom_query->the_post(); ?>

				<div <?php post_class('row'); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="large-3 columns">
						<?php if(has_post_thumbnail()) { ?>
						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php } else{ ?>
						<a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php bloginfo('template_url') ?>/images/thumbnail-default3.png" alt=""></a>
						<?php } ?>
					</div>
					<div class="large-9 columns">
						<p class="left">
						<?php the_content('đây là bài viết'); ?>
						</p>
						<ul class="post-info square">
							<li class="date"><?php the_time('jS F Y'); ?></li>
							<li class="category">Posted in <?php the_category(', '); ?></li>
							<li class="read-more"><a href="<?php the_permalink(); ?>" class="button radius">Read more</a></li>
						</ul>
					</div>
		        </div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>
			
			<?php kriesi_pagination($query_string); ?>

		</div>

  
<?php get_footer(); ?> 

	