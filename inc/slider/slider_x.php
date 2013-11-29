<div class="columns slider large-12">
			   <div class="preloader"></div>
          <ul data-orbit data-options="timer_speed:6000; slide_number:false;">
            <?php 
            
              $args = array('post_type' => 'slider','posts_per_page' => 3);
              $loop = new WP_Query($args);
              while ($loop->have_posts()): $loop->the_post();
               echo '<li>';
                echo '<a href='.get_post_meta(get_the_ID(),'link',true).'>';
                echo the_post_thumbnail('full');
                echo "</a>";
                echo '<div class="orbit-caption hide-for-small">';
                echo the_excerpt();
                echo "</div>";
              echo '</li>';
              endwhile;
              ?>
               
            
            
          </ul>
          <div class="shadow hide-for-small"></div>

        </div>