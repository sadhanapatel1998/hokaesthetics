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
                        <li class="breadcrumb-item active">Invisalign & Clear Aligners</li>
                    </ol>
                    <h2 class="breadcrumb-title">Invisalign & Clear Aligners</h2>
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
                    <span class="service-tag">Invisalign & Clear Aligners</span>

                    <h2 class="mb-4">Invisalign &amp; Clear Aligners for a Discreet, Straighter Smile</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/invisalign-clear-aligners.jpg" alt="Invisalign & Clear Aligners">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Invisalign and Clear Aligner treatments gradually straighten teeth using
                        a series of custom, virtually invisible aligners. Every treatment plan is personalized after a
                        detailed dental assessment to ensure safe, effective, and comfortable results.
                    </p>

                    <p>
                        Each set of aligners gently shifts teeth into their ideal position, with progress tracked
                        throughout your treatment. Whether you're correcting crowding, spacing, or bite issues, our
                        expert team creates a customized treatment plan to help you achieve a straighter smile
                        discreetly, without traditional braces.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Virtually Invisible</h5>
                                <p class="mb-0 text-secondary">Clear aligners straighten teeth discreetly.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Comfortable & Removable</h5>
                                <p class="mb-0 text-secondary">Easily removed for eating, brushing, and flossing.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Custom-Planned Progress</h5>
                                <p class="mb-0 text-secondary">A tailored plan that tracks your smile's transformation.</p>
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
