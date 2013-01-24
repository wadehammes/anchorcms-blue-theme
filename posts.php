<?php theme_include('header'); ?>

		<section id="intro" class="content">
			<!-- <h1>Hi, I'm Wade.</h1> -->
			<p>Hi, I am Wade, a UX &amp; front-end designer in Ballston, VA. I believe in simple, clean design &amp; code. <a href="/contact">Let's make something awesome together</a>.</p>
		</section>

		<section id="posts">
			<?php if(has_posts()): ?>
					<h3>Latest Articles</h3>
					<ul class="items">
						<?php while(posts()): ?>
							<li class="animated fadeIn">
								<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
									<span class="links">
										<time datetime="<?php echo date(DATE_W3C, article_time()); ?>">#<?php echo article_id(); ?></time>
										<h2><?php echo article_title(); ?></h2>
									</span>
								</a>
								<div class="clear"></div>
							</li>
						<?php endwhile; ?>
					</ul>
					<div id="pagination">
						<p><span class="newer"><?php echo posts_next(); ?></span> <span class="older"><?php echo posts_prev(); ?></span> </p><div class="clear"></div>
					</div>
					<?php else: ?>
					<p>Looks like you have some writing to do!</p>
			<?php endif; ?>
		</section>

<?php theme_include('footer'); ?>