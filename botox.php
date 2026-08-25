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
                        <li class="breadcrumb-item active">Botox</li>
                    </ol>
                    <h2 class="breadcrumb-title">Botox</h2>
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
                    <span class="service-tag">Botox</span>

                    <h2 class="mb-4">Botox Treatments for Smooth, Youthful Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/botox.jpg" alt="Botox">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Botox treatments use USFDA-approved anti-wrinkle injections to relax
                        overactive facial muscles, softening fine lines and expression wrinkles. Every treatment is
                        personalized after a detailed facial assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        Botox is commonly used to treat <strong>forehead lines, frown lines, crow's feet,</strong>
                        and <strong>bunny lines</strong>, as well as for preventive anti-aging care. Whether you're
                        looking to soften existing wrinkles or prevent new ones from forming, our expert team creates
                        a customized treatment plan to help you achieve a refreshed, natural appearance.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Softens Wrinkles</h5>
                                <p class="mb-0 text-secondary">Smooths fine lines and expression wrinkles.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Prevents New Lines</h5>
                                <p class="mb-0 text-secondary">Relaxes muscles to slow the formation of future wrinkles.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Quick & Natural Results</h5>
                                <p class="mb-0 text-secondary">Delivers a refreshed look with minimal downtime.</p>
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
