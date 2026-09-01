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
                        <li class="breadcrumb-item active">Permanent Microblading</li>
                    </ol>
                    <h2 class="breadcrumb-title">Permanent Microblading</h2>
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
                    <span class="service-tag">Permanent Microblading</span>

                    <h2 class="mb-4">Permanent Microblading for Perfectly Defined Brows</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/microblading.jpg" alt="Permanent Microblading">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Permanent Microblading uses a fine hand-held tool to create ultra-thin,
                        hair-like strokes that mimic your natural brow hair. Every treatment is personalized after a
                        detailed brow assessment to ensure safe, effective, and natural-looking results with minimal
                        downtime.
                    </p>

                    <p>
                        The technique builds definition stroke by stroke, filling in sparse areas and shaping the brow
                        to complement your face. Whether you're looking to correct uneven brows or simply wake up with
                        perfectly defined arches every day, our expert team creates a customized treatment plan to help
                        you achieve natural, long-lasting results.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Perfectly Defined Brows</h5>
                                <p class="mb-0 text-secondary">Hair-like strokes create a natural, well-shaped brow.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural, Realistic Finish</h5>
                                <p class="mb-0 text-secondary">Blends seamlessly with existing brow hair.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Wake Up Ready</h5>
                                <p class="mb-0 text-secondary">Long-lasting definition that saves daily makeup time.</p>
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
