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
                        <li class="breadcrumb-item active">Teeth Whitening</li>
                    </ol>
                    <h2 class="breadcrumb-title">Teeth Whitening</h2>
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
                    <span class="service-tag">Teeth Whitening</span>

                    <h2 class="mb-4">Professional Teeth Whitening for a Brighter Smile</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/teeth-whitening.jpg" alt="Teeth Whitening">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Teeth Whitening treatments use advanced, dentist-supervised technology
                        to safely lift stains and brighten your natural tooth shade. Every treatment is personalized
                        after a detailed dental assessment to ensure safe, effective, and comfortable results with
                        minimal sensitivity.
                    </p>

                    <p>
                        Our in-clinic whitening breaks down surface and deeper stains caused by coffee, tea, tobacco,
                        or aging, revealing a noticeably brighter smile in a single session. Whether you're preparing
                        for a special occasion or simply want a fresher, more confident smile, our expert team creates
                        a customized treatment plan to help you achieve lasting results.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Visibly Brighter Smile</h5>
                                <p class="mb-0 text-secondary">Removes stains for noticeably whiter teeth.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Safe, Dentist-Supervised</h5>
                                <p class="mb-0 text-secondary">Professional-grade whitening with minimal sensitivity.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Fast, Long-Lasting Results</h5>
                                <p class="mb-0 text-secondary">Noticeable brightening in a single session that lasts.</p>
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
