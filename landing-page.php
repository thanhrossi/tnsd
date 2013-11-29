<?php 
	/*
	Template Name: Landing Page
	*/ 

 ?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Foundation 4</title>

  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.css">
  

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/custom.modernizr.js"></script>
  <style type="text/css">
	@media only screen and (max-width: 768px){
		.com img{
			margin-top: 10px;
		}
	}
	.thanh{
		position: relative;
	}
	.thanh img{
		position: absolute;
		top: 15px;
		left: 40px;
	}
	.shit{
		width: 100%;
		margin: 0px auto;
	}
	/*customize*/
	h1, p#subheading{
		font-family: "Segoe UI light",sans-serif;
		font-weight: 320;
	}
	h1{
		font-size: 3em;
		margin: 40px 0 0 ;
	}
	p#subheading{
		font-size:1.5em;
		margin-bottom: 40px;
	}
	p#desc-txt{
		margin: 20px 0 25px;
		font-size: 17px;
		line-height:22px;
	}
	a.btn{
		font-size: 20px;
		
	}
  </style>

</head>
<body>

	

	<div class="section-container header">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="text-center">The cure to your slacking problem</h1>
				<p class="text-center" id="subheading">
					Fail to get your work completed = we embarrass you.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns text-center">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/guy.png" alt="guy" />
			</div>
			<div class="large-5 columns large-offset-1">
				<p id="desc-txt">
					<strong>It's simple</strong>.
					Connect your facebook or twitter account and set goals. If you fail to login and mark your to-do items as complete, we will make a random and embarrassing post on your	behaft !
				</p>
				<div class="large-12 columns">
					<a href="#" class="button radius btn shit">Stop slacking. Get Started</a>
				</div>
				<p class="text-center" id="slack-free">Slackk.com is 100% free</p>	
			</div>
		</div>
	</div>
	
	<div class="section-container footer">
		<div class="row">
			<div class="large-12 columns">
				<h6 class="text-center" id="slack-media">
					Slackk.com in the media:
				</h6>
			</div>
		</div>
		<div class="row com">
			<div class="text-center large-3 small-6 columns"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo1" /></div>
			<div class="text-center large-3 small-6 columns"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo2" /></div>
			<div class="text-center large-3 small-6 columns"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo3" /></div>
			<div class="text-center large-3 small-6 columns"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo4" /></div>
		</div>
		<div class="divider-line"></div>
		<div class="row">
			<div class="large-5 columns thanh">
				<div class="large-2 columns">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo1.png" alt="logo1" class="hide-for-small"/>
				</div>
				<div class="large-10 columns">
					<figure>
						<blockquote>
							"Slackk is a great way to make sure you get home work done on time."
						</blockquote>
						<figcaption>
							Thanh Tran
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="large-5 columns large-offset-2 thanh">
				<div class="large-2 columns">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo1.png" alt="logo1" class="hide-for-small"/>
				</div>
				<div class="large-10 columns">
					<figure>
						<blockquote>
							"Slackk is a great way to make sure you get home work done on time."
						</blockquote>
						<figcaption>
							Thanh Tran
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-5 columns thanh">
				<div class="large-2 columns">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo1.png" alt="logo1" class="hide-for-small"/>
				</div>
				<div class="large-10 columns">
					<figure>
						<blockquote>
							"Slackk is a great way to make sure you get home work done on time."
						</blockquote>
						<figcaption>
							Thanh Tran
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="large-5 columns large-offset-2 thanh">
				<div class="large-2 columns">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo1.png" alt="logo1" class="hide-for-small"/>
				</div>
				<div class="large-10 columns">
					<figure>
						<blockquote>
							"Slackk is a great way to make sure you get home work done on time."
						</blockquote>
						<figcaption>
							Thanh Tran
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
 
  <script>
    $(document).foundation();
  </script>
</body>
</html>
