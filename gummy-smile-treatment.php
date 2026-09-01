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
                        <li class="breadcrumb-item active">Gummy Smile Treatment</li>
                    </ol>
                    <h2 class="breadcrumb-title">Gummy Smile Treatment</h2>
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
                    <span class="service-tag">Gummy Smile Treatment</span>

                    <h2 class="mb-4">Gummy Smile Treatment for a Balanced, Confident Smile</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/gummy-smile-treatment.jpg" alt="Gummy Smile Treatment">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Gummy Smile Treatment corrects excess gum display when you smile,
                        restoring a more balanced tooth-to-gum ratio. Every treatment is personalized after a detailed
                        dental and facial assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        Depending on the underlying cause, treatment may involve gum contouring, muscle-relaxing
                        injections, or a combination approach to reduce excess gum show. Whether your gummy smile is
                        due to gum tissue, muscle activity, or tooth position, our expert team creates a customized
                        treatment plan to help you achieve a more proportionate, confident smile.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Balanced Smile Proportion</h5>
                                <p class="mb-0 text-secondary">Reduces excess gum display for a harmonious smile.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Minimally Invasive Options</h5>
                                <p class="mb-0 text-secondary">Tailored solutions from injections to gum contouring.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Boosts Smile Confidence</h5>
                                <p class="mb-0 text-secondary">Helps you feel more comfortable smiling freely.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/dental-why-choose.php'); ?>
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
