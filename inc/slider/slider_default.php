<div class="columns slider large-12">
			   <div class="preloader"></div>
          <ul data-orbit>
            <?php 
              global $post;
              $args = array('numberposts' => 4,'category' => 17);
              $custom_post = get_posts($args);
              foreach ($custom_post as $post) : setup_postdata($post);
              ?>
               <li>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <div class="orbit-caption hide-for-small"><?php the_excerpt(); ?></div>
              </li>
            <?php 
              endforeach;
              wp_reset_postdata();
               
             ?>
            
          </ul>
          <div class="shadow hide-for-small"></div>

        </div>