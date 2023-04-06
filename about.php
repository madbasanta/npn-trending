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
                NPN is one of the most reliable cleaning, demolition, and waste management companies established on June 10, 2022, based on commercial services. 
                The company is trying to build trust with different clients through contractors and builders too. 
                The main target is to provide quality service across Melbourne in the upcoming year, considering the importance of the environment. 
                We will ensure that our clients' goals are reached through the use of environmentally friendly chemicals and products, 
                with the help of personal protective equipment. 
                This plays a prominent role in the health and safety of the employees because we cannot compromise if any shorts of accidents happen in the workplace. 
                That's why it should be considered a high priority to give sustainability to work safety and satisfaction guarantee through our service, 
                leading to fulfilling the requirements of the client along with the progress of the company.
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