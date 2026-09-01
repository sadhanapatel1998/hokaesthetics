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
                        <li class="breadcrumb-item active">Intimate Injectable & PRP</li>
                    </ol>
                    <h2 class="breadcrumb-title">Intimate Injectable & PRP</h2>
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
                    <span class="service-tag">Intimate Injectable & PRP</span>

                    <h2 class="mb-4">Intimate Injectable &amp; PRP Treatments for Natural Rejuvenation</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/intimate-injectable-prp.jpg" alt="Intimate Injectable & PRP">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Intimate Injectable and PRP treatments use USFDA-approved fillers and
                        your body's own Platelet-Rich Plasma (PRP) to support tissue rejuvenation and comfort. Every
                        session is personalized after a detailed and private consultation to ensure safe, effective
                        results with minimal downtime.
                    </p>

                    <p>
                        PRP delivers concentrated growth factors to stimulate natural tissue renewal, while targeted
                        injectables help restore volume and hydration where needed. Whether you're looking to improve
                        sensation, comfort, or overall intimate wellness, our expert team creates a customized
                        treatment plan in a discreet, comfortable setting.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural Tissue Rejuvenation</h5>
                                <p class="mb-0 text-secondary">PRP stimulates the body's own healing and renewal process.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Volume & Hydration</h5>
                                <p class="mb-0 text-secondary">Targeted injectables improve comfort and tissue quality.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe & Private</h5>
                                <p class="mb-0 text-secondary">A discreet, judgement-free approach to intimate wellness.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/gynaecology-why-choose.php'); ?>
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
