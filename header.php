<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="
  <?php if ( (is_home()) || (is_front_page()) ) {
      echo ('Your main description goes here');
  } elseif(is_category()) {
      echo category_description();
  } elseif(is_tag()) {
      echo '-tag archive page for this blog' . single_tag_title();
  } elseif(is_month()) {
      echo 'archive page for this blog' . the_time('F, Y');
  } else {
      echo get_post_meta($post->ID, "Metadescription", true);
  }?>">

  <title><?php if ( is_category() ) {
    echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
  } elseif ( is_tag() ) {
    echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
  } elseif ( is_archive() ) {
    wp_title(''); echo ' Archive | '; bloginfo( 'name' );
  } elseif ( is_search() ) {
    echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
  } elseif ( is_home() || is_front_page() ) {
    bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
  }  elseif ( is_404() ) {
    echo 'Error 404 Not Found | '; bloginfo( 'name' );
  } elseif ( is_single() ) {
    wp_title('');
  } else {
    echo wp_title( ' | ', false, right ); bloginfo( 'name' );
  } ?>
  </title>

  
  <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"> -->
  <link rel="shortcut icon" href="<?php if ( of_get_option( 'example_fav' ) ) { ?><?php echo of_get_option( 'example_fav' ); ?><?php } ?>">
   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery.js"></script>
   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/backtotop.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/off.js"></script>
  <!--<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/custom.modernizr.js"></script>-->
  <?php wp_head(); ?>
  
</head>
<body>
  
  <div class="wrapper">
	<div class="row">
    <header>
    <div class="top-bar-container fixed contain-to-grid hide-for-small-only">
        <nav class="top-bar" data-options="back_text: Trở lại" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                </li>          
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>
            <section class="top-bar-section">
                <?php foundation_top_bar_l(); ?>

                <?php foundation_top_bar_r(); ?>
            </section>
        </nav>
    </div>
    <div class="off-canvas-wrap">
      <div class="inner-wrap">
        <nav class="tab-bar">
    
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
          </section>
    
          <section class="right tab-bar-section">
            <h1 class="title">Foundation</h1>
          </section>
    
        </nav>
    
        <!-- Off Canvas Menu -->
        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <?php foundation_top_bar_l(); ?>
          </ul>
        </aside>
    
        <section class="main-section">
          <p>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, laborum, voluptatum quo dolorum rerum dolore reiciendis asperiores incidunt ex debitis veritatis quibusdam similique molestiae amet corporis laboriosam unde. Quasi, minus.</span>
            <span>Sapiente, reprehenderit, asperiores, aliquid, commodi repellat saepe a nisi vel sequi hic eaque adipisci ipsam dignissimos mollitia aliquam magni dolorem esse maxime nam molestiae error sit quia voluptates aut quaerat.</span>
            <span>Quae, neque saepe voluptates beatae nobis ratione debitis pariatur quisquam asperiores quam amet vero impedit natus recusandae perspiciatis possimus eligendi voluptas maxime explicabo consequuntur itaque quas totam voluptatum officia ullam!</span>
            <span>Atque, repellat asperiores cupiditate consequatur non magni dolore incidunt. Nostrum, quod, dolore, ea odio voluptas quidem consequatur perspiciatis modi cumque voluptate laborum pariatur enim tenetur ad a debitis natus veniam?</span>
            <span>Adipisci, nulla minima ullam provident odit at beatae omnis aut error illum! Quaerat, minima, sit, consequuntur, dolore magni sapiente veritatis soluta eos reprehenderit itaque molestias dicta explicabo eaque quia unde.</span>
            <span>Ex, placeat, qui enim esse fuga eos error omnis labore asperiores obcaecati natus quaerat animi inventore culpa tempora odio ullam. Officia, minus, sequi deleniti eius non consequatur doloribus quae cumque.</span>
          </p>
        </section>
    
      <!-- close the off-canvas menu -->
      <a class="exit-off-canvas"></a>
    
      </div>
    </div>
    <!--<nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">My Site</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>
    
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <!-- <ul class="right">
          <li class="active"><a href="#">Right Nav Button Active</a></li>
          <li class="has-dropdown">
            <a href="#">Right Button with Dropdown</a>
            <ul class="dropdown">
              <li><a href="#">First link in dropdown</a></li>
            </ul>
          </li>
        </ul>
    
        <!-- Left Nav Section -->
        <!-- <ul class="left">
          <li><a href="#">Left Nav Button</a></li>
        </ul>
      </section>
    </nav>-->  

		<div class="large-12 columns">

			<h2><?php bloginfo( 'name' ) ?></h2>
			<p><?php echo of_get_option( 'example_text_mini', 'no entry' ); ?></p>

      <p><?php echo of_get_option( 'example_images', 'no entry' ); ?></p>
      <ul class="social inline-list hide-for-small">
        <li><a href="#"><i class="foundicon-facebook"></i></a></li>
        <li><a href="#"><i class="foundicon-youtube"></i></a></li>
        <li><a href="#"><i class="foundicon-twitter"></i></a></li>
        <li><a href="#"><i class="foundicon-google-plus"></i></a></li>
      </ul>
			<hr />

		</div>
		<?php if(is_home()){
      require_once 'inc/slider/slider_x.php';
    }else{} 
    ?>


        </header>
	</div>