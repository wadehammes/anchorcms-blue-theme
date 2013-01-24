<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type"
	content="text/html;charset=ISO-8859-1">

	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

	<meta name="description" content="<?php echo site_description(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>"> 
	<!-- Expanded: <?php echo theme_url('/css/max.css'); ?> SASS: <?php echo theme_url('/css/style.scss'); ?> -->

	<link href="http://wadehammes.com/css/animate-custom.css" rel="stylesheet" type="text/css" />
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

	<script>var base = '<?php echo theme_url(); ?>';</script>

  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  	<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
  	<script src="<?php echo theme_url('/js/jribbble.min.js'); ?>"></script>
  	<script src="<?php echo theme_url('/js/chirp.min.js'); ?>"></script>
	
	<!--[if lt IE 9]>
	<script src="<?php echo theme_url('/js/modernizr.min.js'); ?>"></script>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta name="viewport" content="width=device-width">
	<meta name="generator" content="Anchor CMS">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo current_url(); ?>">
	<meta property="og:image" content="http://wadehammes.com/images/logo-w-crown_white_og.png">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">

	<!-- Fonts -->
	<script type="text/javascript" src="//use.typekit.net/sqt7nva.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script type="text/javascript">
		$(document).ready(function () {		
			$.jribbble.getShotsByPlayerId('whammes', function (playerShots) {
			    var html = [];
			
			    $.each(playerShots.shots, function (i, shot) {
			        html.push('<li><a href="' + shot.url + '">');
			        html.push('<img src="' + shot.image_teaser_url + '" ');
			        html.push('alt="' + shot.title + '"></a></li>');
			    });
			
			    $('#dribbble').html(html.join(''));
			}, {page: 1, per_page: 6});
		});
	</script>
	<?php if(customised()): ?>
	<!-- Custom CSS -->
	<style><?php echo article_css(); ?></style>

	<!--  Custom Javascript -->
	<script><?php echo article_js(); ?></script>
	<?php endif; ?>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<section class="header">
			<article class="container">
			<a href="/"><div id="crown"></div></a></div>
				<?php if(has_menu_items()): ?>
					<ul role="navigation">
						<?php while(menu_items()): ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</article>
		</section>
		<section class="search">
			<div class="container">
				<form id="search" action="<?php echo search_url(); ?>" method="post">
					<input type="search" name="term" placeholder="To search, click here, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
				</form>
			</div>
		</section>
		<div class="search-tab">
			<div class="container">
				<img class="search-icon" src="http://wadehammes.com/images/search.png" alt="" />
			</div>
		</div>
		<section id="main-content" class="container">
			<article class="grid">

