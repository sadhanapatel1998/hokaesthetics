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
                        <li class="breadcrumb-item active">Vaginal Dryness Treatment</li>
                    </ol>
                    <h2 class="breadcrumb-title">Vaginal Dryness Treatment</h2>
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
                    <span class="service-tag">Vaginal Dryness Treatment</span>

                    <h2 class="mb-4">Vaginal Dryness Treatment for Lasting Comfort</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/vaginal-dryness-treatment.jpg" alt="Vaginal Dryness Treatment">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Vaginal Dryness Treatment uses advanced, USFDA-approved technology to
                        improve natural lubrication and restore tissue health. Every session is personalized after a
                        detailed and private consultation to ensure safe, effective results with minimal downtime.
                    </p>

                    <p>
                        The treatment supports the vaginal tissue's natural hydration and elasticity, which can be
                        affected by hormonal changes, menopause, or other factors. Whether your discomfort is
                        occasional or ongoing, our expert team creates a customized treatment plan in a discreet,
                        comfortable setting to help you achieve lasting relief.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Natural Lubrication</h5>
                                <p class="mb-0 text-secondary">Supports the tissue's natural moisture and comfort.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Tissue Health</h5>
                                <p class="mb-0 text-secondary">Improves elasticity and overall vaginal tissue wellness.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Lasting Relief</h5>
                                <p class="mb-0 text-secondary">Addresses discomfort for sustained, long-term comfort.</p>
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
