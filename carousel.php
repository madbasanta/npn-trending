<?php
$activeIndex = 0;
$items = [
    [
        'title' => 'COMMERCIAL <br>CLEANING SERVICES',
        'text' => 'High-quality office cleaning with a focus on brand reputation and a clean working environment. Cost-effective solutions with a balance of cost-efficiency and quality.',
        'action' => '/cleaning.php'
    ],
    [
        'title' => 'DEMOLITION: <br>RELIABLE, AFFORDABLE',
        'text' => 'NPN Demolition offers top-quality demolition services at affordable prices. Trust us for reliable and tailored solutions for residential and commercial projects.',
        'action' => '/demolition.php'
    ],
    [
        'title' => 'WASTE MANAGEMENT <br>AND BIN COLLECTION',
        'text' => 'Find out the regular collection days for general and recycling waste bins, what can be disposed of in each, and how to report lost or missed collections on the website.',
        'action' => '/waste-management.php'
    ],
];
?>
<!--banner section start -->
<div class="banner_section layout_padding">
    <div class="container-fluid">
        <section class="slide-wrapper">
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php foreach ($items as $i => $item): ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $i ?>" class="<?= $activeIndex === $i ? 'active' : '' ?>"></li>
                        <?php endforeach; ?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($items as $i => $item): ?>

                            <div class="carousel-item <?= $activeIndex === $i ? 'active' : '' ?>">
                                <div class="container">
                                    <div class="banner_main">
                                        <h1 class="banner_taital"><?= $item['title'] ?></h1>
                                        <p class="banner_text"><?= $item['text'] ?></p>
                                        <div class="btn_main">
                                            <div class="contact_bt active"><a href="/contact.php">Contact Us</a></div>
                                            <div class="readmore_bt"><a href="<?= $item['action'] ?>">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--banner section end -->