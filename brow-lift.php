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
                        <li class="breadcrumb-item active">Brow Lift</li>
                    </ol>
                    <h2 class="breadcrumb-title">Brow Lift</h2>
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
                    <span class="service-tag">Brow Lift</span>

                    <h2 class="mb-4">Non-Surgical Brow Lift for an Open, Refreshed Look</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/brow-lift.jpg" alt="Brow Lift">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Brow Lift treatments use USFDA-approved injectables to gently lift
                        and shape the eyebrows, opening up the eye area for a more alert, youthful appearance. Every
                        treatment is personalized after a detailed facial assessment to ensure safe, effective, and
                        natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our brow lift treatments help address <strong>drooping brows, hooded eyelids, asymmetrical
                        brows,</strong> and <strong>a tired or heavy-lidded appearance</strong>. Whether you're
                        looking for a subtle arch or a more noticeable lift, our expert team creates a customized
                        treatment plan to help you achieve an open, well-defined brow.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Lifts the Brow</h5>
                                <p class="mb-0 text-secondary">Elevates drooping brows for a refreshed appearance.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Opens Up the Eyes</h5>
                                <p class="mb-0 text-secondary">Reduces hooding for a more alert, youthful look.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>No Downtime</h5>
                                <p class="mb-0 text-secondary">Delivers natural results without surgery or recovery time.</p>
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
