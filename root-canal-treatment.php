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
                        <li class="breadcrumb-item active">Root Canal Treatment</li>
                    </ol>
                    <h2 class="breadcrumb-title">Root Canal Treatment</h2>
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
                    <span class="service-tag">Root Canal Treatment</span>

                    <h2 class="mb-4">Painless Root Canal Treatment to Save Your Natural Tooth</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/root-canal-treatment.jpg" alt="Root Canal Treatment">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Root Canal Treatment (RCT) removes infected or inflamed pulp from
                        within the tooth to relieve pain and save the natural tooth structure. Every procedure is
                        personalized after a detailed dental assessment and imaging to ensure safe, effective, and
                        comfortable treatment.
                    </p>

                    <p>
                        Using modern techniques and thorough anesthesia, the infected pulp is carefully removed,
                        cleaned, and sealed to prevent further infection. Whether you're experiencing tooth pain,
                        sensitivity, or swelling, our expert team creates a customized treatment plan to help you
                        achieve lasting relief while preserving your natural tooth.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Relieves Tooth Pain</h5>
                                <p class="mb-0 text-secondary">Removes infected pulp to eliminate discomfort.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Saves Your Natural Tooth</h5>
                                <p class="mb-0 text-secondary">Preserves the tooth instead of requiring extraction.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Comfortable & Painless</h5>
                                <p class="mb-0 text-secondary">Modern techniques ensure a virtually painless procedure.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/dental-why-choose.php'); ?>
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
