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
                        <li class="breadcrumb-item active">Lip Enhancement</li>
                    </ol>
                    <h2 class="breadcrumb-title">Lip Enhancement</h2>
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
                    <span class="service-tag">Lip Enhancement</span>

                    <h2 class="mb-4">Lip Enhancement for Fuller, Naturally Beautiful Lips</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/lip-enhancement.jpg" alt="Lip Enhancement">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Lip Enhancement treatments use USFDA-approved hyaluronic acid fillers
                        to add volume, definition, and hydration to the lips. Every treatment is personalized after
                        a detailed facial assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        Our lip treatments help address <strong>thin lips, uneven lip borders, loss of lip volume,
                        </strong> and <strong>fine lines around the mouth</strong>. Whether you're looking for
                        subtle hydration or fuller, more defined lips, our expert team creates a customized
                        treatment plan to help you achieve soft, natural-looking results.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Adds Volume</h5>
                                <p class="mb-0 text-secondary">Creates fuller, more shapely lips.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Lip Symmetry</h5>
                                <p class="mb-0 text-secondary">Refines lip borders for a balanced, even shape.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Hydrates & Smooths</h5>
                                <p class="mb-0 text-secondary">Softens fine lines around the mouth for a fresher look.</p>
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
