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
                                <a href="<?= htmlspecialchars($category['link']); ?>">
                                    <?= htmlspecialchars($category['title']); ?>
                                </a>
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
                            <a href="./about-us.php" class="btn btn-secondary">
                                Read More About
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
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
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

<!--Counter Section -->
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
<!-- /Counter Section -->

<!-- why choose Us Section -->
<section class="choose-section-seventeen section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">
                <div class="choose-image">
                    <img alt="Why Choose HOK Aesthetics" class="img-fluid" src="assets/image/why-choose-us.jpg">

                    <div class="choose-video">
                        <h4 class="text-center text-white">
                            Where Beauty Meets Medical Excellence, Precision & Lasting Confidence
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="section-header section-header-ten">
                    <div class="section-sub-title">
                        <span class="sec-circle" aria-hidden="true"></span>Why Choose HOK Aesthetics
                    </div>

                    <h2 class="section-title">Your Trusted Destination for Advanced Aesthetic Care</h2>

                    <p>
                        At HOK Aesthetics, we combine medical expertise, advanced technology, and personalized treatment
                        plans to deliver safe, natural-looking results. Every procedure is performed with precision,
                        honesty, and a commitment to helping you look and feel your best.
                    </p>
                </div>

                <div class="row justify-content-center g-4">

                    <div class="col-sm-6 col-lg-4 d-flex">
                        <div class="choose-item-two flex-fill">
                            <div class="choose-icon">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                            <h3 class="custom-title">Science Driven</h3>
                            <p>Advanced treatments backed by modern medical technology.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 d-flex">
                        <div class="choose-item-two flex-fill">
                            <div class="choose-icon">
                                <i class="fa-solid fa-user-doctor"></i>
                            </div>
                            <h3 class="custom-title">Personalized Care</h3>
                            <p>Customized solutions designed for your unique aesthetic goals.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 d-flex">
                        <div class="choose-item-two flex-fill">
                            <div class="choose-icon">
                                <i class="fa-solid fa-shield-heart"></i>
                            </div>
                            <h3 class="custom-title">Safe & Trusted</h3>
                            <p>Doctor-led procedures focused on natural, visible results.</p>
                        </div>
                    </div>

                    <!-- <div class="view-top">
                        <a href="./about-us.html" class="btn btn-secondary">
                            Read More
                        </a>
                    </div> -->
                </div>

            </div>
        </div>

        <img alt="bg" class="choose-bg-01 rotate-anime" src="assets/img/bg/shape-01.png">
</section>
<!-- /why choose Us Section -->

<!-- Work Process Section -->
<section class="work-section-eleven section">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
            <div class="section-sub-title text-white">
                <span class="sec-circle" aria-hidden="true"></span>Our Treatment Process
            </div>

            <h2 class="section-title text-white">Your Journey to Natural, Confident Results</h2>

            <p class="text-white">
                From your first consultation to personalized aftercare, every step at HOK Aesthetics is designed with
                precision, safety, and expertise—ensuring a comfortable experience and natural-looking results that
                enhance your confidence.
            </p>
        </div>

        <div class="work-details-eleven">
            <div class="row g-5">

                <!-- Step 1 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven wow fadeInUp" data-wow-duration="1s">
                        <div class="step"><span><i class="fa-solid fa-circle"></i> Step 1</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>

                        <div class="work-content">
                            <h3 class="custom-title">Expert Consultation</h3>

                            <div class="work-img">
                                <img class="img-fluid img-one" alt="Expert Consultation"
                                    src="assets/image/work-process/process-1.jpg">

                                <div class="text">
                                    We understand your concerns and recommend the most suitable treatment for your
                                    beauty goals.
                                </div>
                            </div>
                        </div>

                        <img class="img-fluid slide-arrow-icon" alt="arrow" src="assets/image/icon/arrow-icon.png">
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven two wow fadeInUp" data-wow-duration="2s">
                        <div class="step"><span><i class="fa-solid fa-circle"></i> Step 2</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>

                        <div class="work-content">
                            <h3 class="custom-title">Personalized Plan</h3>

                            <div class="work-img">
                                <img class="img-fluid img-one" alt="Personalized Plan"
                                    src="assets/image/work-process/process-2.jpg">

                                <div class="text">
                                    A customized treatment plan is created to suit your skin, hair, or aesthetic needs.
                                </div>
                            </div>
                        </div>

                        <img class="img-fluid slide-arrow-icon" alt="arrow" src="assets/image/icon/arrow-icon.png">
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven three wow fadeInUp" data-wow-duration="3s">
                        <div class="step"><span><i class="fa-solid fa-circle"></i> Step 3</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>

                        <div class="work-content">
                            <h3 class="custom-title">Advanced Procedure</h3>

                            <div class="work-img">
                                <img class="img-fluid img-one" alt="Advanced Procedure"
                                    src="assets/image/work-process/process-3.jpg">

                                <div class="text">
                                    Our specialists perform every procedure with precision, safety, and advanced
                                    technology.
                                </div>
                            </div>
                        </div>

                        <img class="img-fluid slide-arrow-icon" alt="arrow" src="assets/image/icon/arrow-icon.png">
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="work-item-eleven four wow fadeInUp" data-wow-duration="4s">
                        <div class="step"><span><i class="fa-solid fa-circle"></i> Step 4</span></div>
                        <div class="arrow-img"><span><i class="isax isax-arrow-down-1"></i></span></div>

                        <div class="work-content">
                            <h3 class="custom-title">Aftercare & Results</h3>

                            <div class="work-img">
                                <img class="img-fluid img-one" alt="Aftercare and Results"
                                    src="assets/image/work-process/process-4.jpg">

                                <div class="text">
                                    We provide ongoing aftercare guidance to ensure comfortable healing and
                                    long-lasting, natural results.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <img class="img-fluid work-bg-one" alt="bg" src="assets/image/bg/work-bg-one.png">
    <img class="img-fluid work-bg-four" alt="bg" src="assets/image/bg/work-bg-4.png">
</section>
<!-- /Work Process Section -->

<!-- Team Section -->
<?php include('include/team.php'); ?>
<!-- /Team Section -->

<!-- Start Faq -->
<section class="faq-section-six section">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
            <div class="section-sub-title">
                <span class="sec-circle" aria-hidden="true"></span>Frequently Asked Questions
            </div>

            <h2 class="section-title">Everything You Need to Know About HOK Aesthetics</h2>

            <!-- <p>
                Find answers to common questions about our treatments, consultations, safety standards, and personalized aesthetic care to help you make informed decisions with confidence.
            </p> -->
        </div>

        <!-- start row -->
        <div class="row g-4">

            <div class="col-lg-5">
                <div class="faq-support">
                    <img src="./assets/image/icon/support-icon.svg" alt="support" class="img-fluid element-1">

                    <h3 class="custom-title">We're here to help with all your aesthetic care questions.</h3>

                    <p class="description">
                        Our team is ready to guide you with expert advice, treatment recommendations, and personalized
                        support.
                    </p>

                    <a href="./contact-us.php" class="btn btn-secondary">
                        <span>Contact Us</span>
                    </a>
                </div>

                <div class="faq-help">
                    <div class="about-popup-item border-0 pb-0 mb-0">
                        <div class="support-item">
                            <div class="avatar avatar-lg rounded-circle flex-shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>
                                <p class="title">General Inquiries</p>
                                <h4 class="link">
                                    <a href="mailto:info@hokaesthetics.com">info@hokaesthetics.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="about-popup-item border-0 pt-3 mb-0 pb-0">
                        <div class="support-item">
                            <div class="avatar avatar-lg rounded-circle flex-shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>

                            <div>
                                <p class="title">Call Us</p>
                                <h4 class="link">
                                    <a href="tel:+919910169317">+91 99101 69317</a>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="about-popup-item border-0 pt-3 mb-0">
                            <div class="support-item">
                                <div class="avatar avatar-lg bg-primary rounded-circle flex-shrink-0">
                                    <i class="fa-solid fa-clock"></i>
                                </div>

                                <div>
                                    <p class="title">Business Hours</p>
                                    <h4 class="link">10:00 AM – 7:00 PM</h4>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>

            <div class="col-lg-7">
                <div class="faq-info wow zoomIn" data-wow-duration="1s">
                    <div class="accordion" id="faq-details-one">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <a href="#" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I book a consultation at HOK Aesthetics?
                                </a>
                            </h3>

                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#faq-details-one">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>
                                            You can book your consultation by calling us, sending a WhatsApp message, or
                                            visiting our clinic. Our team will help you schedule a convenient
                                            appointment and guide you through the entire booking process with ease.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Will I receive a personalized treatment plan?
                                </a>
                            </h3>

                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-details-one">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>
                                            Yes, every consultation includes a personalized assessment so we can
                                            recommend treatments that match your skin, hair, or aesthetic goals while
                                            ensuring the most suitable and effective approach.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I reschedule my appointment if needed?
                                </a>
                            </h3>

                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#faq-details-one">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>
                                            Absolutely. Contact us as early as possible, and our team will help you
                                            reschedule your appointment at the next available time with complete
                                            convenience and flexibility.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Are your aesthetic treatments safe?
                                </a>
                            </h3>

                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#faq-details-one">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>
                                            Yes, our treatments are performed by experienced professionals using
                                            advanced technology while following strict safety and hygiene standards for
                                            comfortable, reliable, and natural-looking results every time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Which aesthetic treatments do you offer?
                                </a>
                            </h3>

                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#faq-details-one">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>
                                            We offer skin aesthetics, hair restoration, laser treatments, injectables,
                                            dental aesthetics, body contouring, and personalized wellness solutions
                                            tailored to your unique beauty and confidence goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <!-- <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSix">
                                <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How long does it take to see treatment results?
                                </a>
                            </h3>

                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faq-details-one">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <p>
                                            Results vary depending on the treatment, but many patients notice visible
                                            improvements within days or weeks, with continued enhancement as the
                                            treatment progresses naturally.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->
    </div>
</section>
<!-- End Faq -->

<!-- Testimonials Section -->
<section class="testimonial-section-seventeen section">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
            <div class="section-sub-title text-white">
                <span class="sec-circle" aria-hidden="true"></span>Patient Testimonials
            </div>
            <h2 class="section-title text-white">Real Stories, Beautiful Transformations</h2>
            <p class="text-white">
                Discover how our personalized treatments, advanced technology, and expert care have helped patients
                achieve natural-looking results with confidence.
            </p>
        </div>
    </div>
    <!-- Slider -->
    <div class="testimonial-slider-seventeen">
        <?php foreach ($testimonials as $testimonial): ?>
            <div class="slide-item">
                <div class="testimonial-item-seventeen">
                    <div class="testimonial-user">
                        <img src="<?= $testimonial['image']; ?>" alt="<?= htmlspecialchars($testimonial['name']); ?>"
                            class="img-fluid">

                        <div class="author-info">
                            <h3 class="custom-title"><?= htmlspecialchars($testimonial['name']); ?></h3>
                            <p class="mb-0"><?= htmlspecialchars($testimonial['location']); ?></p>
                        </div>
                    </div>
                    <p class="description">
                        <?= htmlspecialchars($testimonial['review']); ?>
                    </p>
                    <div class="rating">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <i class="fas fa-star <?= $i <= $testimonial['rating'] ? 'filled' : ''; ?>"></i>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <img class="img-fluid work-bg-one" alt="bg" src="assets/image/bg/work-bg-one.png">
    <img class="img-fluid work-bg-four" alt="bg" src="assets/image/bg/work-bg-4.png">
</section>
<!-- Testimonials Section End -->

<!-- Start Blog Section -->
<section class="section blog-section-sixteen">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
            <div class="section-sub-title">
                <span class="sec-circle" aria-hidden="true"></span>Latest Blogs
            </div>
            <h2 class="section-title mb-2">Expert Tips for Skin, Hair & Aesthetic Care</h2>
            <p>
                Explore expert insights, treatment guides, and beauty tips from HOK Aesthetics to help you make informed decisions for healthier skin, stronger hair, and lasting confidence.
            </p>
        </div>
        <div class="row justify-content-center row-gap-4 blog-row-sixteen">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-sixteen wow fadeInUp" data-wow-duration="1s">
                        <div class="blog-overlay">
                            <a href="blogs.php" class="blog-tag"><?= htmlspecialchars($blog['category']); ?></a>

                            <img src="<?= $blog['image']; ?>"
                                alt="<?= htmlspecialchars($blog['title']); ?>"
                                class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-info">
                                <h3 class="custom-title">
                                    <a href="blogs.php"><?= htmlspecialchars($blog['title']); ?></a>
                                </h3>
                                <p class="desc"><?= htmlspecialchars($blog['desc']); ?></p>
                            </div>
                            <div class="blog-author justify-content-end">
                                <div class="blog-date">
                                    <i class="fa-regular fa-calendar me-1"></i>
                                    <?= htmlspecialchars($blog['date']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Blog Section -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>