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
                        <li class="breadcrumb-item active">Aesthetic Crown & Bridges</li>
                    </ol>
                    <h2 class="breadcrumb-title">Aesthetic Crown & Bridges</h2>
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
                    <span class="service-tag">Aesthetic Crown & Bridges</span>

                    <h2 class="mb-4">Aesthetic Crowns &amp; Bridges for a Complete, Natural Smile</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/aesthetic-crown-bridges.jpg" alt="Aesthetic Crown & Bridges">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Aesthetic Crown and Bridge treatments restore damaged, weakened, or
                        missing teeth using tooth-colored, high-quality materials. Every treatment is personalized
                        after a detailed dental assessment to ensure safe, effective, and long-lasting results with a
                        completely natural look.
                    </p>

                    <p>
                        Crowns strengthen and protect teeth that are cracked, heavily filled, or root-canal treated,
                        while bridges replace missing teeth by anchoring to adjacent teeth. Whether you need to restore
                        a single tooth or several, our expert team creates a customized treatment plan to help you
                        achieve a complete, functional, natural-looking smile.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Damaged Teeth</h5>
                                <p class="mb-0 text-secondary">Strengthens and protects weakened or cracked teeth.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Replaces Missing Teeth</h5>
                                <p class="mb-0 text-secondary">Bridges fill gaps for a complete, functional bite.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural, Long-Lasting Look</h5>
                                <p class="mb-0 text-secondary">Tooth-colored materials blend seamlessly with your smile.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/dental-why-choose.php'); ?>
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
