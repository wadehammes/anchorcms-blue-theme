        </article>
    </section>
<div class="clear"></div>

    <section class="tweet">
        <div class="container">
            <script>Chirp({
              user: 'whammes', //Twitter username
              max: 1, //Maximum number of tweets to show 
              count: 1, //Total tweets to retrieve
              retweets: true, //Show/Don't show retweets
              replies: false,  //Show/Don't show replies
              cacheExpire: 1000 * 60 * 2 //Number of milliseconds to cache tweets
            })</script>
        </div>
    </section>
    
    <section class="about">
        <div class="container">
            <div id="dribbble"></div>
            <div class="clear"></div>
        </div>
    </section>

    <footer>
        <div class="container">
            <article class="grid">
                <div class="col-1-2">
                    <small>&copy; <?php echo date('Y'); ?> by <?php echo site_name(); ?></small>
                </div>
                <div class="col-1-2">
                    <ul role="footer">
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
                        <?php if(twitter_account()): ?>
                            <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a> / <a href="https://alpha.app.net/wade">@wade</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </article>
        </div>
        <div class="clear"></div>
    </footer>
</body>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10143312-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</html>
