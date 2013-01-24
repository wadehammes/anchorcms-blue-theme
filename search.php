<?php theme_include('header'); ?>

<div id="search-page" class="content">
    
    <h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
    
    <?php if(has_search_results()): ?>
        <p>We found <?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;</p>
        <ul class="items wrap">
			<?php while(search_results()): ?>
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

        <p><?php echo search_prev(); ?> <?php echo search_next(); ?></p>

    <?php else: ?>
        <p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
    <?php endif; ?>
    
</div>

<?php theme_include('footer'); ?>

