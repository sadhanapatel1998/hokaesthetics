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

<!-- Services Section -->
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
                        <img src="<?= $sub['image']; ?>" alt="<?= htmlspecialchars($sub['name']); ?>" class="img-fluid">

                        <div class="hok-service-icon">
                            <i class="<?= $service['icon']; ?>"></i>
                        </div>
                    </div>

                    <div class="hok-service-content">
                        <span class="service-category">
                            <?= htmlspecialchars($service['title']); ?>
                        </span>

                        <h4><?= htmlspecialchars($sub['name']); ?></h4>
                        <!-- 
                                <p class="service-desc">
                                    <? //= htmlspecialchars($sub['description']); 
                                    ?>
                                </p> -->

                        <div class="hok-service-tags">
                            <a href="service-details.php?service=<?= $slug; ?>" class="btn hok-service-btn">
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
<!-- /Services Section -->

<section class="counter-section-seventeen section pb-0">
    <div class="container">
        <div class="row g-4 counts">

            <div class="col-sm-6 col-xl-3">
                <div class="counter-item-seventeen">
                    <h3 class="count"><span class="count-digit">1000</span>+</h3>
                    <p>Successful <span>Treatments</span></p>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="counter-item-seventeen">
                    <h3 class="count"><span class="count-digit">4</span>+</h3>
                    <p>Expert <span>Specialists</span></p>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="counter-item-seventeen">
                    <h3 class="count"><span class="count-digit">15</span>+</h3>
                    <p>Advanced <span>Technologies</span></p>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="counter-item-seventeen">
                    <h3 class="count"><span class="count-digit">100</span>%</h3>
                    <p>Personalized <span>Care Plans</span></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="choose-section-seventeen section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="choose-image"><img alt="Health" class="img-fluid" src="assets/image/why-choose-us.jpg">
                    <div class="choose-video">
                        <h4 class="text-center text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Ipsum</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-header section-header-ten">
                    <div class="section-sub-title">
                        <span class="sec-circle" aria-hidden="true"></span>About HOK Aesthetics
                    </div>

                    <h2 class="section-title">Premium Skin, Hair & Aesthetic Clinic in Jodhpur</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia magnam aliquam velit iusto
                        perspiciatis nulla possimus nostrum, sapiente maiores necessitatibus commodi itaque a maxime
                        vero.</p>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-sm-6 col-lg-4 d-flex">
                        <div class="choose-item-two flex-fill">
                            <div class="choose-icon"><img alt="Consultation" class="img-fluid"
                                    src="assets/img/icons/choose-icon-01.svg"></div>
                            <h3 class="custom-title">No Pressure Consult</h3>
                            <p>Explore your options in a welcoming, judgment free </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex">
                        <div class="choose-item-two flex-fill">
                            <div class="choose-icon"><img alt="Consultation" class="img-fluid"
                                    src="assets/img/icons/choose-icon-02.svg"></div>
                            <h3 class="custom-title">Flexible Scheduling</h3>
                            <p>Evening and weekend appointments available</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-flex">
                        <div class="choose-item-two flex-fill">
                            <div class="choose-icon"><img alt="Consultation" class="img-fluid"
                                    src="assets/img/icons/choose-icon-03.svg"></div>
                            <h3 class="custom-title">Risk Free Start</h3>
                            <p>Satisfaction guaranteed or your money back</p>
                        </div>
                    </div>
                </div>
                <div class="view-top">
                    <a href="./about-us.html" class="btn btn-secondary">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div><img alt="bg" class="choose-bg-01 rotate-anime" src="assets/img/bg/shape-01.png">
</section>
<section class="work-section-eleven section">
    <div class="container">
        <div class="section-header section-header-eleven text-center wow fadeInUp" data-wow-duration="1s">
            <div class="title"><img class="img-fluid icon-1" alt="arrow"
                    src="/react/template/assets/img/icons/arrow-left.svg">Our Work Process<img class="img-fluid icon-2"
                    alt="arrow" src="/react/template/assets/img/icons/arrow-right.svg"></div>
            <h2 class="section-title"> How We Transform Your Aesthetic Goals</h2>
        </div>
        <div class="work-details-eleven">
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven wow fadeInUp" data-wow-duration="1s">
                        <div class="step"><span> <i class="fa-solid fa-circle"></i> Step 1</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>
                        <div class="work-content">
                            <h3 class="custom-title"> Initial Consultation </h3>
                            <div class="work-img"><img class="img-fluid img-one" alt="work"
                                    src="/react/template/assets/img/category/work-img-1.jpg">
                                <div class="text">At the initial stage, our experts understand your needs and recommend
                                    the best treatment.</div>
                            </div>
                        </div><img class="img-fluid slide-arrow-icon" alt="arrow"
                            src="/react/template/assets/img/icons/arrow-icon.png">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven two wow fadeInUp" data-wow-duration="2s">
                        <div class="step"><span> <i class="fa-solid fa-circle"></i> Step 2</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>
                        <div class="work-content">
                            <h3 class="custom-title"> Treatment Planning </h3>
                            <div class="work-img"><img class="img-fluid img-one" alt="work"
                                    src="/react/template/assets/img/category/work-img-2.jpg">
                                <div class="text">Our experts create a customized surgical or non surgical plan tailored
                                    to your unique needs.</div>
                            </div>
                        </div><img class="img-fluid slide-arrow-icon" alt="arrow"
                            src="/react/template/assets/img/icons/arrow-icon.png">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven three wow fadeInUp" data-wow-duration="3s">
                        <div class="step"><span> <i class="fa-solid fa-circle"></i> Step 3</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>
                        <div class="work-content">
                            <h3 class="custom-title"> Procedure Execution</h3>
                            <div class="work-img"><img class="img-fluid img-one" alt="work"
                                    src="/react/template/assets/img/category/work-img-3.jpg">
                                <div class="text">Our specialists carry out the procedure with precision, ensuring safe
                                    and effective results.</div>
                            </div>
                        </div><img class="img-fluid slide-arrow-icon" alt="arrow"
                            src="/react/template/assets/img/icons/arrow-icon.png">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven four wow fadeInUp" data-wow-duration="4s">
                        <div class="step"><span> <i class="fa-solid fa-circle"></i> Step 4</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>
                        <div class="work-content">
                            <h3 class="custom-title"> Recovery Support </h3>
                            <div class="work-img"><img class="img-fluid img-one" alt="work"
                                    src="/react/template/assets/img/category/work-img-4.jpg">
                                <div class="text">Our team provides continuous recovery support to ensure a comfortable
                                    healing process.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><img class="img-fluid work-bg-one" alt="bg" src="/react/template/assets/img/bg/work-bg-one.png"><img
        class="img-fluid work-bg-two" alt="bg" src="/react/template/assets/img/bg/work-bg-2.png"><img
        class="img-fluid work-bg-three" alt="bg" src="/react/template/assets/img/bg/work-bg-3.png"><img
        class="img-fluid work-bg-four" alt="bg" src="/react/template/assets/img/bg/work-bg-4.png"><img
        class="img-fluid work-bg-five" alt="bg" src="/react/template/assets/img/bg/work-shadow.png">
</section>







<?php
$content = ob_get_clean();
require 'layout.php';
?>