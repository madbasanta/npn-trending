<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="location_main">
            <div class="location_text">
                <img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Location</a></span></div>
            <div class="location_text center"><img src="images/call-icon.png">
                <span class="padding_left_10">
                    <a href="tel:<?= config('phone1') ?>" class="text-success">Call : <?= config('phone1') ?></a>
                </span>
            </div>
            <div class="location_text right"><img src="images/mail-icon.png">
                <span class="padding_left_10">
                    <a href="mailto:<?= config('email') ?>" class="text-success"><?= config('email') ?></a>
                </span>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="footer_taital">About</h2>
                    <p class="footer_text">
                        NPN: Your Partner for Cleaning, Demolition, Waste Mgmt & Bin Collection. Contact us for
                        cost-effective solutions.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h2 class="footer_taital">Services Link</h2>
                    <p class="footer_text">
                        <a href="/cleaning.php" class="text-success">Cleaning</a> <br>
                        <a href="/demolition.php" class="text-success">Demolition</a> <br>
                        <a href="/waste-management.php" class="text-success">Waste Management</a> <br>
                    </p>
                </div>
                <div class="col-lg-4">
                    <form action="/action/subscribe.php"
                          method="POST">
                        <h2 class="footer_taital">Subscribe</h2>
                        <input type="text"
                               class="Enter_text"
                               placeholder="Enter Your Email"
                               name="Enter Your Email">
                        <div class="subscribe_bt">
                            <button class=""
                                    style="background:transparent">
                                <a href="javascript:void(0)">Subscribe</a>
                            </button>
                        </div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Copyright <?= date('Y') ?> All Rights Reserved. <?= config('app_name') ?>
<!--            <a href="https://html.design"> Free html Templates</a>-->
        </p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/plugin.js"></script>
<!-- sidebar -->
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/custom.js"></script>
<!-- javascript -->
<script src="/js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>