<?php
ob_start();
?>
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" aria-label="home"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                    <h2 class="breadcrumb-title">About Us</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section class="about-section-ten section">
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
                                and wellness therapies, we're committed to enhancing your confidence. Our experienced
                                specialists
                                create customized treatment plans in a comfortable, luxurious environment focused on
                                long-lasting
                                beauty, healthy skin, and exceptional patient satisfaction.
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

<!-- Mission Section -->
<section class="section wellness-section-seventeen">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
            <div class="section-sub-title text-white">
                <span class="sec-circle" aria-hidden="true"></span>Our Foundation
            </div>

            <h2 class="section-title text-white">Vision, Mission, Promise & Expertise</h2>

            <p class="subtitle text-white">
                Building confidence through science, personalized care, and advanced aesthetic excellence with every
                treatment.
            </p>
        </div>
        <div class="row align-items-center row-gap-4">
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex wow fadeInDown" data-wow-duration="1.5s">
                <div class="wellness-item-seventeen flex-fill rotate-1">
                    <div class="wellness-content">
                        <h3 class="custom-title">Our Vision</h3>
                        <p class="description">
                            We strive to deliver aesthetic excellence through advanced treatments, personalized care,
                            and natural-looking results that inspire confidence while setting new standards in beauty
                            and wellness.
                        </p>
                    </div>

                    <img alt="Vision" class="img-fluid wellness-img" src="assets/image/services/acne-pore-facial.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex wow fadeInDown" data-wow-duration="2s">
                <div class="wellness-item-seventeen flex-fill rotate-2">
                    <div class="wellness-content">
                        <h3 class="custom-title">Our Mission</h3>
                        <p class="description">
                            We combine evidence-based treatments, modern technology, and personalized care to provide
                            safe, effective solutions that enhance beauty, confidence, and overall well-being for every
                            patient.
                        </p>
                    </div>
                    <img alt="Mission" class="img-fluid wellness-img"
                        src="assets/image/services/skin-glow-brightness.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex wow fadeInDown" data-wow-duration="2.5s">
                <div class="wellness-item-seventeen flex-fill rotate-3">
                    <div class="wellness-content">
                        <h3 class="custom-title">Our Promise</h3>
                        <p class="description">
                            Every treatment is designed to achieve natural, beautiful, and confidence-enhancing outcomes
                            with honesty, precision, compassionate care, and a strong commitment to lasting patient
                            satisfaction.
                        </p>
                    </div>
                    <img alt="Promise" class="img-fluid wellness-img"
                        src="assets/image/services/weight-maintenance-program.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex wow fadeInDown" data-wow-duration="3s">
                <div class="wellness-item-seventeen flex-fill rotate-4">
                    <div class="wellness-content">
                        <h3 class="custom-title">Our Expertise</h3>
                        <p class="description">
                            Our experienced specialists use advanced aesthetic techniques and scientific excellence to
                            deliver safe procedures, visible improvements, and refined results tailored to your unique
                            beauty goals.
                        </p>
                    </div>
                    <img alt="Expertise" class="img-fluid wellness-img" src="assets/image/services/teeth-whitening.jpg">
                </div>
            </div>
        </div>
    </div>

    <img alt="bg" class="img-fluid wellness-bg-1 d-none d-lg-block" src="assets/img/bg/blog-bg-04.png">
</section>
<!-- /Mission Section -->


<!-- Team Section -->
<?php include('include/team.php'); ?>
<!-- /Team Section -->

<!-- Start Faq -->
<?php include('include/faqs.php'); ?>
<!-- End Faq -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>