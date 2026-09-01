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
                        <li class="breadcrumb-item active">Permanent Lip Blush</li>
                    </ol>
                    <h2 class="breadcrumb-title">Permanent Lip Blush</h2>
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
                    <span class="service-tag">Permanent Lip Blush</span>

                    <h2 class="mb-4">Permanent Lip Blush for Naturally Full, Beautiful Lips</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/lip-blush.jpg" alt="Permanent Lip Blush">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Permanent Lip Blush treatment deposits soft, sheer pigment to enhance
                        your natural lip color and shape. Every treatment is personalized after a detailed lip
                        assessment to ensure safe, effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        The technique softly corrects asymmetry, defines the lip border, and adds a healthy, flushed
                        tint that lasts. Whether you're looking to add color to pale lips or simply want a wash of
                        natural tint every day, our expert team creates a customized treatment plan to help you achieve
                        full, beautiful-looking lips.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural, Full Color</h5>
                                <p class="mb-0 text-secondary">Adds a soft, healthy tint that enhances your natural lip tone.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Beautifully Defined Shape</h5>
                                <p class="mb-0 text-secondary">Softly corrects asymmetry and defines the lip border.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Long-Lasting Tint</h5>
                                <p class="mb-0 text-secondary">Wake up with color that lasts, no lipstick needed.</p>
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
