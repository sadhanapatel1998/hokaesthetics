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
                        <li class="breadcrumb-item active">Permanent Lip Liner</li>
                    </ol>
                    <h2 class="breadcrumb-title">Permanent Lip Liner</h2>
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
                    <span class="service-tag">Permanent Lip Liner</span>

                    <h2 class="mb-4">Permanent Lip Liner to Define, Balance & Enhance Your Lips</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/lip-liner.jpg" alt="Permanent Lip Liner">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Permanent Lip Liner treatment outlines the natural lip border to create
                        crisp, balanced definition. Every treatment is personalized after a detailed lip assessment to
                        ensure safe, effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        The technique subtly corrects asymmetry and enhances the natural shape of your lips, giving a
                        polished outline that pairs beautifully with or without lipstick. Whether you're looking to
                        define thinner lips or simply maintain a crisp border, our expert team creates a customized
                        treatment plan to help you achieve balanced, enhanced lips.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Defines Lip Shape</h5>
                                <p class="mb-0 text-secondary">Creates a crisp, natural-looking outline.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Balances Symmetry</h5>
                                <p class="mb-0 text-secondary">Softly corrects unevenness for a harmonious shape.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Enhances Every Day</h5>
                                <p class="mb-0 text-secondary">Looks polished with or without lipstick.</p>
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
