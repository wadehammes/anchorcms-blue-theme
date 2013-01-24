<?php theme_include('header'); ?>

<section class="content" id="article-<?php echo article_id(); ?>">
    <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo article_date(); ?></time><h1><?php echo article_title(); ?></h1>

	<article>
	    <?php echo article_html(); ?>
	</article>
</section>
<div class="clear"></div>

<section class="footnote">

  <div class="social">
    <span style="margin-right: -20px"><a href="https://twitter.com/share" class="twitter-share-button" data-via="whammes" data-dnt="true">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></span>

    <div class="fb-like" data-href="http://wadehammes.com/<?php echo current_url(); ?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
  </div>
</section>
<div class="clear"></div>

<?php theme_include('footer'); ?>


