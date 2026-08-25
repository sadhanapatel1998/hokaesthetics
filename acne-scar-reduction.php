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
                        <li class="breadcrumb-item active">Acne Scar Reduction</li>
                    </ol>
                    <h2 class="breadcrumb-title">Acne Scar Reduction</h2>
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
                    <span class="service-tag">Acne Scar Reduction</span>

                    <h2 class="mb-4">Advanced Acne Scar Reduction for Smoother, More Even Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/acne-scar-reduction.jpg" alt="Acne Scar Reduction">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Acne Scar Reduction treatments use advanced USFDA-approved laser
                        technology to resurface the skin and rebuild collagen, softening the appearance of acne scars.
                        Every session is personalized after a detailed skin assessment to ensure safe, effective, and
                        natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our approach focuses on <strong>Improves Acne Scars, Smoothens Skin Texture,</strong>
                        and <strong>Boosts Confidence</strong>. Whether you're dealing with shallow or more pronounced
                        acne scarring, our expert team creates a customized treatment plan to help you achieve smoother,
                        more refined skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Acne Scars</h5>
                                <p class="mb-0 text-secondary">Visibly softens depressed and textured acne scarring.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Smoothens Skin Texture</h5>
                                <p class="mb-0 text-secondary">Refines overall skin surface for a more even feel.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Boosts Confidence</h5>
                                <p class="mb-0 text-secondary">Helps you feel more comfortable and confident in your skin.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/laser-why-choose.php'); ?>
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
