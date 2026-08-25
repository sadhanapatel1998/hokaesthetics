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
                        <li class="breadcrumb-item active">Nutrition and Lifestyle Guidance</li>
                    </ol>
                    <h2 class="breadcrumb-title">Nutrition and Lifestyle Guidance</h2>
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
                    <span class="service-tag">Nutrition and Lifestyle Guidance</span>

                    <h2 class="mb-4">Nutrition and Lifestyle Guidance for Long-Term Wellness</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/nutrition-lifestyle-guidance.jpg" alt="Nutrition and Lifestyle Guidance">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Nutrition and Lifestyle Guidance programs help you build sustainable
                        eating and daily habits that support lasting weight management. Every program is
                        personalized after a detailed lifestyle assessment to ensure practical, effective, and
                        long-term results.
                    </p>

                    <p>
                        Our guidance includes <strong>balanced nutrition plans, lifestyle and behavior
                        coaching,</strong> and <strong>long term healthy habits</strong>. Whether you're looking to
                        overhaul your eating patterns or build habits that stick, our expert team creates a
                        customized plan to help you achieve lasting wellness.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Balanced Nutrition Plans</h5>
                                <p class="mb-0 text-secondary">Meal plans tailored to your body and goals.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Lifestyle & Behavior Coaching</h5>
                                <p class="mb-0 text-secondary">Guidance to build habits that support your goals.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Long Term Healthy Habits</h5>
                                <p class="mb-0 text-secondary">Focuses on sustainable change, not quick fixes.</p>
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
