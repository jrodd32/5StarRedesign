<?php
$options = get_theme_mods();

if (isset($options['theme_option_street_txt_input'], $options['theme_option_city_txt_input'], $options['theme_option_state_txt_input'], $options['theme_option_zip_txt_input'])) {
    $directions = silencio_build_directions_url(
        $options['theme_option_street_txt_input'],
        $options['theme_option_city_txt_input'],
        $options['theme_option_state_txt_input'],
        $options['theme_option_zip_txt_input']
    );
}

?>
                </div><!-- .container -->
            </div><!-- #content .site-content -->
            <!-- <section class="weather" role="complementary">
<?php
/*
if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar')) {
}*/
?>
            </section> -->
            <section class="staff">
                <div class="container">
                    <h3>We Will Take Care of You</h3>
                    <h4>Our helpful staff will take care of your needs</h4>
                    <figure>
                        <img src="<?php bloginfo('template_url');?>/res/images/workers/debbie.jpg" alt="Debbie Little - Principal Broker - 5 Star Cabin Rental">
                        <figcaption>
                            <h5>Debbie Little</h5>
                            Principal Broker
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?php bloginfo('template_url');?>/res/images/workers/priscilla.jpg" alt="Priscilla - Vacation Specialist - 5 Star Cabin Rental">
                        <figcaption>
                            <h5>Pricilla</h5>
                            Licensed Real Estate Agent
                            <span>Vacation Specialist</span>
                            </figcaption>
                    </figure>
                    <figure>
                        <img src="<?php bloginfo('template_url');?>/res/images/workers/jessica.jpg" alt="Jessica - Licensed Real Estate Agent - 5 Star Cabin Rental">
                        <figcaption>
                            <h5>Jessica</h5>
                            Licensed Real Estate Agent
                            <span>Vacation Specialist</span>
                        </figcaption>
                    </figure>
                </div>
            </section>
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="container">
                    <nav id="footer-nav" role="navigation">
<?php
wp_nav_menu(array('slug' => 'FooterNav'));
?>
                    </nav>
                    <div class="tweets">
                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/fivestarcabins" data-widget-id="299716638582906880" data-chrome="nofooter noscrollbar">Tweets by @fivestarcabins</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                    <aside class="site-info">
                        <ul class="address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                            <li>&#169; <?php echo date('Y');?>  <span itemprop="name"><?php bloginfo('name'); ?></span></li>
<?php
if (!empty($options['theme_option_street_txt_input'])) {
?>
                            <li><span itemprop="street-address"><?php echo $options['theme_option_street_txt_input']; ?></span></li>
<?php
}
if (!empty($options['theme_option_city_txt_input'])) {
?>
                            <li><span itemprop="locality"><?php echo $options['theme_option_city_txt_input']; ?></span>,
<?php
}
if (!empty($options['theme_option_state_txt_input'])) {
?>
                                <span itemprop="region"><?php echo $options['theme_option_state_txt_input']; ?></span>
<?php
}
if (!empty($options['theme_option_zip_txt_input'])) {
?>
                                <span itemprop="postal-code"><?php echo $options['theme_option_zip_txt_input']; ?></span></li>
<?php
}
if (!empty($options['theme_option_phone_txt_input'])) {
?>
                            <li><span itemprop="tel"><i class="fa fa-phone"></i><a href="tel:<?php echo $options['theme_option_phone_txt_input']; ?>"> <?php echo $options['theme_option_phone_txt_input']; ?></a></span></li>
<?php
}
if (!empty($options['theme_option_fax_txt_input'])) {
?>
                            <li><i class="fa fa-fax"></i> <span itemprop="faxNumber"><?php echo $options['theme_option_fax_txt_input']; ?></span></li>
<?php
}
if (!empty($options['theme_option_email_txt_input'])) {
?>
                            <li><span itemprop="email"> <i class="fa fa-envelope"></i> <a href="mailto:<?php echo $options['theme_option_email_txt_input']; ?>">Email</a></span></li>
<?php
}
?>
                        </ul><!-- .address -->

                        <ul class="social-media">
<?php
if (!empty($options['theme_option_facebook_txt_input'])) {
?>
                            <li>
                                <a href="<?php echo $options['theme_option_facebook_txt_input']; ?>">
                                    <i class="fa fa-facebook"></i><span class="sr-only">Facebook</span>
                                </a>
                            </li>
<?php
} if (!empty($options['theme_option_twitter_txt_input'])) {
?>
                            <li>
                                <a href="<?php echo $options['theme_option_twitter_txt_input']; ?>">
                                    <i class="fa fa-twitter"></i><span class="sr-only">Twitter</span>
                                </a>
                            </li>
<?php
} if (!empty($options['theme_option_youtube_txt_input'])) {
?>
                            <li>
                                <a href="<?php echo $options['theme_option_youtube_txt_input']; ?>">
                                    <i class="fa fa-youtube-play"></i><span class="sr-only">YouTube</span>
                                </a>
                            </li>
<?php
} if (!empty($options['theme_option_googleplus_txt_input'])) {
?>
                            <li>
                                <a href="<?php echo $options['theme_option_googleplus_txt_input']; ?>">
                                    <i class="fa fa-google-plus"></i><span class="sr-only">Google+</span>
                                </a>
                            </li>
<?php
} if (!empty($options['theme_option_instagram_txt_input'])) {
?>
                            <li>
                                <a href="<?php echo $options['theme_option_instagram_txt_input']; ?>">
                                    <i class="fa fa-instagram"></i><span class="sr-only">Google+</span>
                                </a>
                            </li>
<?php
} if (!empty($options['theme_option_linkedin_txt_input'])) {
?>
                            <li>
                                <a href="<?php echo $options['theme_option_linkedin_txt_input']; ?>">
                                    <i class="fa fa-linkedin"></i><span class="sr-only">Google+</span>
                                </a>
                            </li>
<?php
}
?>
                    </aside><!-- .site-info -->
                </div><!-- .container -->
            </footer><!-- #colophon .site-footer -->
            <section class="subFoot">
                <div class="address" itemscope itemtype="http://schema.org/LocalBusiness">
                    <p>Debbie Little, Principal Broker of <span itemprop="name">5-Star Cabins</span> located at <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">12075 Campton Rd.</span>, <span itemprop="addressLocality">Slade</span>, <span itemprop="addressRegion">KY</span> 40376</span></p>
                </div>
            </section>
        </div><!-- #page -->
    </div> <!-- .body-wrap -->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?16rwcv8AapMDCxiYnpJAzdDi6UVs7AdX';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
    var sc_project=8246607;
    var sc_invisible=1;
    var sc_security="5dc03a8d";
    var sc_text=2;
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="web analytics"
    href="http://statcounter.com/" target="_blank"><img
    class="statcounter"
    src="http://c.statcounter.com/8246607/0/5dc03a8d/0/"
    alt="web analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

<script type="text/javascript">
    var $buoop = {}
    $buoop.ol = window.onload;
    window.onload=function(){
     try {if ($buoop.ol) $buoop.ol();}catch (e) {}
     var e = document.createElement("script");
     e.setAttribute("type", "text/javascript");
     e.setAttribute("src", "http://browser-update.org/update.js");
     document.body.appendChild(e);
    }
</script>
<?php wp_footer(); ?>

</body>
</html>
