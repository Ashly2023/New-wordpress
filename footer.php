<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-5 foot-box">
                    <div class="foot-cnt">
                        <h4>Locate Us</h4>
                        <ul>
                            <li>Office 103, Bin Hilal Building Al Falah Street Abu Dhabi, UAE</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 foot-box">
                    <div class="foot-cnt quick-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 foot-box">
                    <div class="foot-cnt">
                        <h4>Connect With Us</h4>
                        <div class="social-icons">
                            <ul>
            <li><a href="https://www.linkedin.com/company/bhe-land-systems-llc/"target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt=""></a></li>
                            </ul>
                        </div>
                        <p>© Copyrights BHE Land Systems 2023</p>
                    </div>
                </div>
            </div>
            <div class='scrolltop'>
                <div class='scroll icon'><img src="<?php echo get_template_directory_uri(); ?>/images/back-to-top.svg" alt=""></div>
            </div>
        </footer>
        <!-- script section start -->
        <!-- <script src="js/jquery-3.6.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src='js/owl.carousel.js'></script>
        <script src="js/aos.js"></script>
        <script src="js/smoothscroll.min.js"></script>
        <script src="js/jquery.paroller.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/main-slider.js"></script>
        <script src="js/scrollIt.min.js"></script>
        <script src="js/theme-script.js"></script> -->
        <?php wp_footer(); ?>
</body>

</html>