<?php
ob_start();
include('include/data.php');
?>
<!-- Home Banner -->
<section class="banner-section-fourteen">
    <div class="banner-slider-fourteen">
        <div class="banner-slide">
            <img src="assets/image/banner/banner-1.jpg" class="img-fluid banner-image" alt="banner">
        </div>
        <div class="banner-slide">
            <img src="assets/image/banner/banner-2.jpg" class="img-fluid banner-image" alt="banner">
        </div>
        <div class="banner-slide">
            <img src="assets/image/banner/banner-3.jpg" class="img-fluid banner-image" alt="banner">
        </div>
        <div class="banner-slide">
            <img src="assets/image/banner/banner-4.jpg" class="img-fluid banner-image" alt="banner">
        </div>
    </div>
    <div class="slide-btn">
        <button type="button" class="slick-arrow ban-prev" aria-label="Prev"><i
                class="isax isax-arrow-left"></i></button>
        <button type="button" class="slick-arrow ban-next" aria-label="Next"><i
                class="isax isax-arrow-right-1"></i></button>
    </div>
</section>
<!-- Home Banner End -->

<!-- Brands Section Start -->
<section class="brands-section-thirteen section">
    <div class="container">
        <div class="company-slider health-section-thirteen gap-3">
            <?php foreach ($categories as $index => $category): ?>
                <div class="slide-item">
                    <div class="health-item-thirteen <?php echo $category['class']; ?> wow fadeInUp"
                        data-wow-duration="<?php echo ($index + 1); ?>s">
                        <div class="health-overlay">
                            <div></div>
                            <div class="health-icon">
                                <img class="img-fluid icon-1"
                                    src="assets/image/categories/<?php echo $category['image']; ?>"
                                    alt="<?php echo htmlspecialchars($category['title']); ?>">
                            </div>
                            <div class="shadow-1"></div>
                            <div class="shadow-2"></div>
                        </div>
                        <div class="health-content">
                            <h3 class="custom-title">
                                <a href="#"><?php echo htmlspecialchars($category['title']); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Brands Section End -->

<!-- Brands Section Start -->
<!-- <section class="brands-section-thirteen section">
    <div class="container">
        <div class="company-slider health-section-thirteen gap-3">
            <?php //foreach ($categories as $index => $category): 
            ?>
            <div class="slide-item">
                <div class="health-item-thirteen <?php //echo $category['class']; 
                                                    ?> wow fadeInUp"
                    data-wow-duration="<?php //echo ($index + 1); 
                                        ?>s">
                    <div class="health-overlay">
                        <div class="health-icon">
                            <img class="img-fluid icon-1"
                                src="assets/image/categories/<?php //echo $category['image']; 
                                                                ?>"
                                alt="<?php //echo htmlspecialchars($category['title']); 
                                        ?>">
                        </div>
                        <div class="shadow-1"></div>
                        <div class="shadow-2"></div>
                    </div>
                    <div class="health-content">
                        <h3 class="custom-title">
                            <a href="#"><?php //echo htmlspecialchars($category['title']); 
                                        ?></a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php //endforeach; 
            ?>
        </div>
    </div>
</section> -->
<!-- Brands Section End -->

<!-- About Section -->
<section class="about-section-ten section pt-0">
    <div class="container">
        <div class="about-sec">
            <div class="row align-items-center">

                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="about-content-ten">
                        <div class="section-header section-header-ten">
                            <div class="section-sub-title">
                                <span class="sec-circle" aria-hidden="true"></span>About HOK Aesthetics
                            </div>

                            <h2 class="section-title">Premium Skin, Hair & Aesthetic Clinic in Jodhpur</h2>

                            <p>
                                At HOK Aesthetics, we combine advanced technology with personalized care to deliver
                                safe,
                                natural-looking results. From skin rejuvenation and hair restoration to Botox, laser
                                treatments,
                                and wellness therapies, we're committed to enhancing your confidence.
                            </p>
                        </div>

                        <div class="mission-item-ten wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="mission-icon">
                                <div class="mission-inner">
                                    <img src="./assets/image/about/icon-1.png" alt="Expert Care" class="img-fluid">
                                </div>
                            </div>
                            <div>
                                <h3 class="custom-title">Doctor-Led Expertise</h3>
                                <p>Safe treatments backed by advanced medical technology.</p>
                            </div>
                        </div>

                        <div class="mission-item-ten wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="mission-icon">
                                <div class="mission-inner">
                                    <img src="./assets/image/about/icon-2.png" alt="Personalized Care"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div>
                                <h3 class="custom-title">Personalized Care</h3>
                                <p>Customized treatments for natural, long-lasting results.</p>
                            </div>
                        </div>

                        <div class="view-more">
                            <a href="./about-us.html" class="btn btn-secondary">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <!-- About Img -->
                <div class="col-lg-6">
                    <img src="assets/image/about/about-old.jpg" alt="About Image" class="img-fluid about-img">
                </div>
            </div>
            <!-- About Content End -->
        </div>
    </div>
</section>
<!-- About Section End -->




<?php
$content = ob_get_clean();
require 'layout.php';
?>