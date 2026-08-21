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

<!-- Categories Section Start -->
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
<!-- Categories Section End -->

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

<!-- Categories Section -->
<section class="categories-section-three section">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp" data-wow-duration="1s">
            <div class="section-sub-title text-white">
                <span class="sec-circle" aria-hidden="true"></span>About HOK Aesthetics
            </div>

            <h2 class="section-title text-white">Hair & Aesthetic Clinic in Jodhpur</h2>
            <p class="subtitle text-white">Comprehensive dental treatments tailored to your needs, delivered with
                expertise and
                care</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="categories-slider">

            <?php foreach ($services as $slug => $service): ?>
                <?php foreach ($service['subs'] as $sub): ?>

                    <div class="slider-item">
                        <div class="hok-service-card">

                            <div class="hok-service-img-wrap">
                                <img src="<?= $service['image']; ?>"
                                    alt="<?= htmlspecialchars($sub['name']); ?>"
                                    class="img-fluid">

                                <div class="hok-service-icon">
                                    <i class="<?= $service['icon']; ?>"></i>
                                </div>
                            </div>

                            <div class="hok-service-content">
                                <span class="service-category"><?= htmlspecialchars($service['title']); ?></span>

                                <h4><?= htmlspecialchars($sub['name']); ?></h4>

                                <div class="hok-service-tags">
                                    <a href="service-details.php?service=<?= $slug; ?>"
                                        class="btn hok-service-btn">
                                        Learn More
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- /Categories Section -->






<?php
$content = ob_get_clean();
require 'layout.php';
?>