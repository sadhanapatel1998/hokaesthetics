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
                        <li class="breadcrumb-item active">Vaginal Tightening</li>
                    </ol>
                    <h2 class="breadcrumb-title">Vaginal Tightening</h2>
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
                    <span class="service-tag">Vaginal Tightening</span>

                    <h2 class="mb-4">Non-Surgical Vaginal Tightening for Renewed Confidence</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/vaginal-tightening.jpg" alt="Vaginal Tightening">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Vaginal Tightening treatments use advanced, USFDA-approved energy-based
                        technology to stimulate collagen and restore tone within the vaginal tissue. Every session is
                        personalized after a detailed and private consultation to ensure safe, effective results with
                        minimal downtime.
                    </p>

                    <p>
                        The treatment is designed to help restore firmness that may change following childbirth or with
                        age. Whether you're looking to address laxity or simply restore natural tone, our expert team
                        creates a customized treatment plan in a discreet, comfortable setting.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Firmness</h5>
                                <p class="mb-0 text-secondary">Stimulates collagen to improve vaginal tone.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Non-Surgical Solution</h5>
                                <p class="mb-0 text-secondary">A safe, non-invasive alternative to surgery.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Renewed Confidence</h5>
                                <p class="mb-0 text-secondary">Helps restore comfort and self-assurance.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/gynaecology-why-choose.php'); ?>
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
