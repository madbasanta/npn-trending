<?php include_once('head.php') ?>

    <body>
<!--header section start -->
<div class="header_section">

    <?php include_once('navbar.php') ?>

    <?php include_once('carousel.php') ?>
</div>
<!--header section end -->
<!--about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <h1 class="about_taital">About Us</h1>
        <div class="about_text">
            <p class="ipsum_text">
                NPN is a Melbourne-based cleaning, demolition, and waste management company that prioritizes quality
                service, environmental protection, and employee safety. Established on June 10, 2022, NPN aims to build
                trust with clients through its commitment to using environmentally friendly products and personal
                protective equipment. The company's goal is to provide satisfaction and peace of mind to clients while
                also contributing to its own progress.
            </p>
            <p class="ipsum_text">
                Mail : <a href="mailto:<?= config('email') ?>"><?= config('email') ?></a> <br>
                Contact : <a href="tel:<?= config('phone1') ?>"><?= config('phone1') ?></a>
            </p>
        </div>
    </div>
</div>
<!--about section end -->
<!-- services section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">What We Do</h1>
        <p class="about_text">
            NPN offers cost-effective cleaning, demolition, waste management, and bin collection services in Melbourne.
        </p>
        <div class="services_section_2">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon_box d-none">
                        <div class="icon_1"><img src="images/icon-1.png"></div>
                    </div>
                    <h4 class="selection_text">Cleaning Services</h4>
                    <p class="ipsum_text">
                        High-end equipment and quality products used for cleaning offices, healthcare facilities,
                        government buildings, industrial sites, and transport infrastructure.
                        At NPN, we pride ourselves on providing cost-effective solutions that strike a balance between
                        efficiency and quality. Our team is highly trained to deliver services in an
                        education
                        environment and has undergone police and Working with Children checks to ensure the safety
                        and security of your student population.
                    </p>
                    <div class="readmore_bt"><a href="/cleaning.php">Read More</a></div>
                </div>
                <div class="col-lg-4">
                    <div class="icon_box d-none">
                        <div class="icon_1"><img src="images/icon-5.png"></div>
                    </div>
                    <h4 class="selection_text">Demolition Services</h4>
                    <p class="ipsum_text">
                        Reliable and top-quality services for domestic and complete building demolition.
                        Our team of experienced
                        professionals is
                        dedicated to providing top-quality services to our clients in Melbourne. We understand that
                        every
                        project is
                        unique, and we pride ourselves on being able to customize our services to meet the specific
                        needs of our
                        clients.
                    </p>
                    <div class="readmore_bt"><a href="/demolition.php">Read More</a></div>

                </div>
                <div class="col-lg-4">
                    <div class="icon_box d-none">
                        <div class="icon_1"><img src="images/icon-4.png"></div>
                    </div>
                    <h4 class="selection_text">Waste Management</h4>
                    <p class="ipsum_text">
                        Comprehensive services incl. regular bin collection, reporting lost/damaged bins, and missed
                        collections online. Collection weekly/fortnightly.
                        Find out the regular collection days for your general waste bin and recycling bin, what can go
                        in each bin, and how to report lost, stolen or damaged bins and missed collections.
                        If there's a problem with your bin, or your bin collection was missed for an unknown reason, you can
                        report it online.
                    </p>
                    <div class="readmore_bt"><a href="/waste-management.php">Read More</a></div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- services section end -->
<!-- blog section start -->
<!--<div class="blog_section layout_padding">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <div class="blog_img"><img src="images/blog-img.png"></div>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <h1 class="blog_taital">Easily Grow Your Business Earn More Money</h1>-->
<!--                <p class="blog_text">There are many variations of passages of Lorem Ipsum available, but the majority-->
<!--                    have suffered alteration in some form, by injected humour, or randomised words There uffered-->
<!--                    alteration in some form, by injected humour, or randomised words </p>-->
<!--                <div class="read_bt"><a href="#">Read More</a></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- blog section end -->
<!-- events section start -->
<div class="events_section layout_padding">
    <div class="container">
        <h1 class="events_taital">Follow Our Video For Solved Your Problem</h1>
        <div class="events_section_2">
            <div class="events_bg">
                <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
            </div>
        </div>
        <div class="seemore_bt"><a href="#">See More</a></div>
    </div>
</div>
<!-- events section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <h1 class="contact_taital">Get In Touch</h1>
        <p class="contact_text">We'd love to hear from you! Fill out the form or email us at
            <a class="text-success"
               href="mailto:<?= config('email') ?>"><?= config('email') ?></a>. Our team will respond as soon as
            possible.</p>
        <div class="contact_section_2 layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_main">
                        <input type="text"
                               class="mail_text"
                               placeholder="Full Name"
                               name="Full Name">
                        <input type="text"
                               class="mail_text"
                               placeholder="Phone Number"
                               name="Phone Number">
                        <input type="text"
                               class="mail_text"
                               placeholder="Email"
                               name="Email">
                        <textarea class="massage-bt"
                                  placeholder="Massage"
                                  rows="5"
                                  id="comment"
                                  name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                    width="600"
                                    height="400"
                                    frameborder="0"
                                    style="border:0; width: 100%;"
                                    allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
<!-- testimonial section start -->
<div class="testimonial_section layout_padding d-none">
    <div id="my_carousel"
         class="carousel slide"
         data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#my_carousel"
                data-slide-to="0"
                class="active"></li>
            <li data-target="#my_carousel"
                data-slide-to="1"></li>
            <li data-target="#my_carousel"
                data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="testimonial_taital">Testimonial</h1>
                    <p class="testimonial_text">majority have suffered alteration in some form, by injected humour,
                        or </p>
                    <div class="testimonial_section_2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial_box">
                                    <div class="jonimo_taital_main">
                                        <h4 class="jonimo_text">Jonimo</h4>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                                    </div>
                                    <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial_box">
                                    <div class="jonimo_taital_main">
                                        <h4 class="jonimo_text">Mark Duo</h4>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                                    </div>
                                    <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1 class="testimonial_taital">Testimonial</h1>
                    <p class="testimonial_text">majority have suffered alteration in some form, by injected humour,
                        or </p>
                    <div class="testimonial_section_2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial_box">
                                    <div class="jonimo_taital_main">
                                        <h4 class="jonimo_text">Jonimo</h4>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                                    </div>
                                    <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial_box">
                                    <div class="jonimo_taital_main">
                                        <h4 class="jonimo_text">Mark Duo</h4>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                                    </div>
                                    <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1 class="testimonial_taital">Testimonial</h1>
                    <p class="testimonial_text">majority have suffered alteration in some form, by injected humour,
                        or </p>
                    <div class="testimonial_section_2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial_box">
                                    <div class="jonimo_taital_main">
                                        <h4 class="jonimo_text">Jonimo</h4>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                                    </div>
                                    <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial_box">
                                    <div class="jonimo_taital_main">
                                        <h4 class="jonimo_text">Mark Duo</h4>
                                        <div class="quick_icon"><img src="images/quick-icon.png"></div>
                                        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                                    </div>
                                    <p class="dummy_text">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use a passage of Lorem Ipsum, you need to be sure there</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial section end -->

<?php include_once('footer.php') ?>