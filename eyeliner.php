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
                        <li class="breadcrumb-item active">Permanent Eyeliner</li>
                    </ol>
                    <h2 class="breadcrumb-title">Permanent Eyeliner</h2>
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
                    <span class="service-tag">Permanent Eyeliner</span>

                    <h2 class="mb-4">Permanent Eyeliner for Perfect Eyes, Always</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/permanent-eyeliner.jpg" alt="Permanent Eyeliner">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Permanent Eyeliner treatment deposits precise pigment along the lash
                        line to define and enhance your eyes. Every treatment is personalized after a detailed eye
                        assessment to ensure safe, effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        The technique can be tailored from a subtle lash enhancement to a more defined winged liner,
                        depending on your preference. Whether you're looking to save time on your daily makeup routine
                        or achieve a consistently precise line, our expert team creates a customized treatment plan to
                        help you achieve perfectly defined eyes, every day.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Perfect Eyes, Always</h5>
                                <p class="mb-0 text-secondary">Consistently precise definition without daily reapplication.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Customizable Style</h5>
                                <p class="mb-0 text-secondary">From subtle lash enhancement to a defined winged look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smudge-Proof Definition</h5>
                                <p class="mb-0 text-secondary">Long-lasting liner that won't smudge or fade through the day.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/pmu-why-choose.php'); ?>
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
