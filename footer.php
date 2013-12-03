		
		<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>
  Default content
<?php endif; ?>
		<?php get_sidebar(); ?>
		
		
	</div>
  <div class="footer">
    <div class="row">
          <div class="columns large-3 medium-6 small-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, minus quos obcaecati delectus accusantium ullam aliquam quae alias sit adipisci. Neque accusantium magni eius quis temporibus earum autem dolore officia?</p>
          </div>
          <div class="columns large-3 medium-6 small-12">
            <p>Eaque, inventore, autem porro est ratione fugit debitis repudiandae pariatur explicabo mollitia quos odio possimus rem amet nihil optio voluptates illo laboriosam ab quod. Accusamus dolores rem voluptatem maxime corrupti.</p>
          </div>
          <div class="columns large-3 medium-6 small-12">
            <p>Facilis, molestiae, unde, eligendi optio quam esse inventore qui nulla harum dolorem temporibus laboriosam molestias iure a vitae nam voluptatem repudiandae praesentium provident cum dolore amet ipsum nobis quia ab?</p>
          </div>
          <div class="columns large-3 medium-6 small-12">
            <p>Harum, error, molestiae, inventore dolor velit rem vero recusandae labore sit quaerat nobis dolores repudiandae voluptatibus a voluptatem unde adipisci ut. Quaerat, dignissimos, nesciunt sequi impedit voluptas excepturi voluptates placeat.</p>
          </div>
        </div>
        <footer>
        <div class="cop">
         &copy;2013 Copyright by <?php echo of_get_option( 'example_text_mini', 'no entry' ); ?>
        </div>

    </footer>
  </div>
    
</div><!--End wrapper-->
  
 
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/foundation.min.js"></script>
 

  <?php wp_footer(); ?>
</body>
</html>
