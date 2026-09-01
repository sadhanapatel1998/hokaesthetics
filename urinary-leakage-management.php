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
                        <li class="breadcrumb-item active">Urinary Leakage Management</li>
                    </ol>
                    <h2 class="breadcrumb-title">Urinary Leakage Management</h2>
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
                    <span class="service-tag">Urinary Leakage Management</span>

                    <h2 class="mb-4">Urinary Leakage Management for Everyday Confidence</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/urinary-leakage-management.jpg" alt="Urinary Leakage Management">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Urinary Leakage Management treatments use advanced, USFDA-approved
                        technology to strengthen pelvic tissue and support bladder control. Every session is
                        personalized after a detailed and private consultation to ensure safe, effective results with
                        minimal downtime.
                    </p>

                    <p>
                        The treatment works by stimulating collagen and toning the supportive tissue around the
                        bladder, helping to reduce occasional leakage. Whether you're dealing with stress incontinence
                        related to childbirth, aging, or other causes, our expert team creates a customized treatment
                        plan in a discreet, comfortable setting.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Strengthens Supportive Tissue</h5>
                                <p class="mb-0 text-secondary">Improves tone around the bladder for better support.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Leakage Episodes</h5>
                                <p class="mb-0 text-secondary">Helps minimize occasional stress-related leakage.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Non-Surgical & Discreet</h5>
                                <p class="mb-0 text-secondary">A comfortable, private approach with minimal downtime.</p>
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
