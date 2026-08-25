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
                        <li class="breadcrumb-item active">Chin & Jawline Contouring</li>
                    </ol>
                    <h2 class="breadcrumb-title">Chin & Jawline Contouring</h2>
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
                    <span class="service-tag">Chin & Jawline Contouring</span>

                    <h2 class="mb-4">Chin & Jawline Contouring for a Defined, Balanced Profile</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/chin-jawline-contouring.jpg" alt="Chin & Jawline Contouring">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Chin & Jawline Contouring treatments use USFDA-approved dermal
                        fillers to sculpt and define the chin and jawline, creating a stronger, more balanced facial
                        profile. Every treatment is personalized after a detailed facial assessment to ensure safe,
                        effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our contouring treatments help address a <strong>weak chin, undefined jawline, sagging jowls,
                        </strong> and <strong>facial asymmetry</strong>. Whether you're looking to sharpen your
                        jawline or add projection to your chin, our expert team creates a customized treatment plan
                        to help you achieve a well-defined, balanced facial structure.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Defines the Jawline</h5>
                                <p class="mb-0 text-secondary">Sculpts a sharper, more structured jawline.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Enhances Chin Projection</h5>
                                <p class="mb-0 text-secondary">Adds balance and definition to a weak or recessed chin.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Non-Surgical Results</h5>
                                <p class="mb-0 text-secondary">Achieves a sculpted profile without surgery.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/skin-aesthetics-why-choose.php'); ?>
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
