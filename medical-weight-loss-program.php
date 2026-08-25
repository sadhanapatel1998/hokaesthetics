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
                        <li class="breadcrumb-item active">Medical Weight Loss Program</li>
                    </ol>
                    <h2 class="breadcrumb-title">Medical Weight Loss Program</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="service-details-section section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="service-section">
                    <span class="service-tag">Medical Weight Loss Program</span>

                    <h2 class="mb-4">Medical Weight Loss Program for Safe, Sustainable Results</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/medical-weight-loss-program.jpg" alt="Medical Weight Loss Program">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Medical Weight Loss Program combines doctor-supervised care with
                        personalized nutrition and lifestyle planning to help you lose weight safely and
                        sustainably. Every program is designed after a detailed health assessment to ensure safe,
                        effective, and lasting results.
                    </p>

                    <p>
                        Our program includes <strong>doctor-supervised care, personalized diet plans,</strong>
                        and <strong>regular monitoring and support</strong>. Whether you're looking to kickstart
                        your weight loss journey or need ongoing medical guidance, our expert team creates a
                        customized plan to help you reach your goals safely.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Doctor Supervised Program</h5>
                                <p class="mb-0 text-secondary">Medically guided weight loss under expert supervision.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Personalized Diet Plans</h5>
                                <p class="mb-0 text-secondary">Nutrition plans tailored to your body and goals.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Regular Monitoring & Support</h5>
                                <p class="mb-0 text-secondary">Ongoing check-ins to track progress and stay on course.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/weight-loss-why-choose.php'); ?>
                    <?php include('include/services-cta.php'); ?>
                </div>
            </div>
            <?php include('include/services-sidebar.php'); ?>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
require 'layout.php';
?>
