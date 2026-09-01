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
                        <li class="breadcrumb-item active">Melasma Treatment</li>
                    </ol>
                    <h2 class="breadcrumb-title">Melasma Treatment</h2>
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
                    <span class="service-tag">Melasma Treatment</span>

                    <h2 class="mb-4">Advanced Melasma Treatment for Clearer, Even-Toned Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/melasma-treatment.jpg" alt="Melasma Treatment">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Melasma Treatment uses advanced USFDA-approved laser technology to
                        target stubborn pigmentation and regulate melanin production. Every session is personalized
                        after a detailed skin assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        Our approach effectively <strong>Reduces Melasma, Inhibits Pigment Production,</strong>
                        and <strong>Evens Skin Tone</strong>. Whether your melasma is hormonal, sun-induced, or
                        long-standing, our expert team creates a customized treatment plan to help you achieve a
                        clearer, more even complexion.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Melasma</h5>
                                <p class="mb-0 text-secondary">Targets stubborn melasma patches for visible improvement.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Inhibits Pigment Production</h5>
                                <p class="mb-0 text-secondary">Helps regulate excess melanin to prevent recurrence.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Evens Skin Tone</h5>
                                <p class="mb-0 text-secondary">Restores a more balanced, uniform complexion.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/laser-why-choose.php'); ?>
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
