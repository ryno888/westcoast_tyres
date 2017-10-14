<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    echo Error_helper::check_errors();
    $base_url = CI_BASE_URL;
    
?>
        </div>
         <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#body">Home</a></li>
                                <li class="footer-list-item"><a href="#about">Team</a></li>
                                <li class="footer-list-item"><a href="#work">Credentials</a></li>
                                <li class="footer-list-item"><a href="#contact">Contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Twitter</a></li>
                                <li class="footer-list-item"><a href="#">Facebook</a></li>
                                <li class="footer-list-item"><a href="#">Instagram</a></li>
                                <li class="footer-list-item"><a href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                                <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                                <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo-dark.png" alt="flameonepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="#">FlameOnePage</a> Theme Powered by: <a class="fweight-700" href="http://ft-seo.ch/">FairTech Studio</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
    <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo "{$base_url}assets/vendor/jquery.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/jquery-migrate.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/bootstrap/js/bootstrap.min.js"; ?>" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="<?php echo "{$base_url}assets/vendor/jquery.easing.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/jquery.back-to-top.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/jquery.smooth-scroll.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/jquery.wow.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/swiper/js/swiper.jquery.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/masonry/jquery.masonry.pkgd.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/vendor/masonry/imagesloaded.pkgd.min.js"; ?>" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo "{$base_url}assets/js/layout.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/js/components/wow.min.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/js/components/swiper.js"; ?>" type="text/javascript"></script>
        <script src="<?php echo "{$base_url}assets/js/components/masonry.min.js"; ?>" type="text/javascript"></script>
		
		<!-- CUSTOM -->
        <script type="text/javascript" src="<?php echo "{$base_url}assets/js/system.js"; ?>"></script>
        <script type="text/javascript" src="<?php echo "{$base_url}assets/js/frontend.js"; ?>"></script>
        <script type="text/javascript" src="<?php echo "{$base_url}assets/js/components.js"; ?>"></script>

    </body>
    <!-- END BODY -->
</html>
<script>
$(document).ready(function () {
    hideLoader();
});
</script>