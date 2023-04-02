<?php include_once('head.php') ?>

    <body>
<!--header section start -->
<div class="header_section">
    <?php include_once('navbar.php') ?>
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
                As one of Melbourne’s most reliable and respectable demolition companies, NPN Demolition has a strong
                and reliable reputation for delivering top-quality services within your desired time frame and all for
                affordable prices. From domestic to complete building demolition and commercial waste management, we
                cater to everyone who needs our services. We also offer other services, including waste management, bulk
                and asbestos removal, recycling, and excavation services.
            </p>
            <p class="ipsum_text">
                We provide regular collection services for your general waste, food, garden waste, and recycling bins.
                Our collection days are weekly for general and food/garden waste bins and weekly or fortnightly for
                recycling bins, depending on your property and service eligibility. You can report lost, stolen, or
                damaged bins and missed collections online and track the progress of your report. We will repair or
                replace bins for free.
            </p>
            <p class="ipsum_text">
                Our aim is to provide our services to all residents and businesses in Melbourne and to do this, we
                provide a fair and affordable structure for your house demolition costs. Whether you need residential,
                complete building, or commercial demolition services, you can trust NPN to deliver a complete service
                tailored to your needs. Contact us today to discuss your requirements.
            </p>
            <hr>
            <p class="ipsum_text">
                Mail : <a href="mailto:<?= config('email') ?>"><?= config('email') ?></a> <br>
                Contact : <a href="tel:<?= config('phone1') ?>"><?= config('phone1') ?></a>
            </p>
        </div>
    </div>
</div>
<!--about section end -->

<?php include_once('footer.php') ?>