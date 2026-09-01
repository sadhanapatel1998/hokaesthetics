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
                        <li class="breadcrumb-item active">Beard and Eyebrow Restoration</li>
                    </ol>
                    <h2 class="breadcrumb-title">Beard and Eyebrow Restoration</h2>
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
                    <span class="service-tag">Beard and Eyebrow Restoration</span>

                    <h2 class="mb-4">Beard and Eyebrow Restoration for Fuller, Well-Defined Features</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/beard-eyebrow-restoration.jpg" alt="Beard and Eyebrow Restoration">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Beard and Eyebrow Restoration treatments use advanced transplant and
                        enhancement techniques to fill in sparse or patchy facial hair with natural, permanent results.
                        Every procedure is personalized after a detailed facial hair assessment to ensure safe, effective,
                        and natural-looking outcomes.
                    </p>

                    <p>
                        Our comprehensive approach includes <strong>Beard Transplant, Eyebrow Enhancement,</strong>
                        and <strong>Facial Hair Restoration</strong>. Whether you're looking to achieve a fuller beard,
                        thicker eyebrows, or restore patchy facial hair growth, our expert team creates a customized
                        treatment plan to help you achieve well-defined, natural-looking results.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Beard Transplant</h5>
                                <p class="mb-0 text-secondary">Fills in patchy or thin areas for a fuller, denser beard.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Eyebrow Enhancement</h5>
                                <p class="mb-0 text-secondary">Restores shape and thickness to sparse or over-plucked brows.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Facial Hair Restoration</h5>
                                <p class="mb-0 text-secondary">Permanent, natural-looking growth tailored to your facial features.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/hair-why-choose.php'); ?>
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
