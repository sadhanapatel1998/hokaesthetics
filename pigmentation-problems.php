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
                        <li class="breadcrumb-item active">Pigmentation Problems</li>
                    </ol>
                    <h2 class="breadcrumb-title">Pigmentation Problems</h2>
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
                    <span class="service-tag">Pigmentation Problems</span>

                    <h2 class="mb-4">Advanced Pigmentation Treatments for Even, Radiant Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/pigmentation-problems.jpg" alt="Pigmentation Problems">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Pigmentation Treatments use advanced USFDA-approved technology to break
                        down excess melanin, even out skin tone, and restore a brighter, healthier complexion. Every
                        treatment is personalized after a detailed skin assessment to ensure safe, effective, and
                        natural-looking results with minimal downtime.
                    </p>

                    <p>
                        Our advanced solutions are designed to treat <strong>Melasma, Sun Spots, Freckles, Uneven Skin Tone,</strong>
                        and <strong>Age Spots</strong>. Whether the pigmentation is sun-induced, hormonal, or age-related,
                        our expert team creates a customized treatment plan to help you achieve clearer, more even-toned skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Melasma & Sun Spots</h5>
                                <p class="mb-0 text-secondary">Targets stubborn, deep-rooted pigmentation caused by sun exposure and hormones.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Fades Freckles & Age Spots</h5>
                                <p class="mb-0 text-secondary">Lightens visible dark spots for a clearer complexion.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Restores Even Skin Tone</h5>
                                <p class="mb-0 text-secondary">Improves overall uniformity and radiance of the skin.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/skin-aesthetics-technologies.php'); ?>
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