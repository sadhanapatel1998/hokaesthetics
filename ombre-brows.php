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
                        <li class="breadcrumb-item active">Permanent Ombre Brows</li>
                    </ol>
                    <h2 class="breadcrumb-title">Permanent Ombre Brows</h2>
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
                    <span class="service-tag">Permanent Ombre Brows</span>

                    <h2 class="mb-4">Permanent Ombre Brows for a Fuller, Gradient Effect</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/ombre-brows.jpg" alt="Permanent Ombre Brows">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Permanent Ombre Brows technique creates a gradient effect, lighter at
                        the front and deeper towards the tail, for a soft yet defined brow. Every treatment is
                        personalized after a detailed brow assessment to ensure safe, effective, and natural-looking
                        results with minimal downtime.
                    </p>

                    <p>
                        The shaded gradient mimics the look of professionally filled-in brows, offering more depth than
                        a flat powder fill. Whether you prefer a soft daytime look or a bolder, more defined brow, our
                        expert team creates a customized treatment plan to help you achieve a fuller, beautifully
                        graduated effect.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Gradient Definition</h5>
                                <p class="mb-0 text-secondary">Soft at the front, deeper towards the tail for natural depth.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Fuller Effect</h5>
                                <p class="mb-0 text-secondary">Adds volume and shape to thin or uneven brows.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Customizable Intensity</h5>
                                <p class="mb-0 text-secondary">Can be styled soft or bold to suit your preference.</p>
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
