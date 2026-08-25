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
                        <li class="breadcrumb-item active">Photo Facial</li>
                    </ol>
                    <h2 class="breadcrumb-title">Photo Facial</h2>
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
                    <span class="service-tag">Photo Facial</span>

                    <h2 class="mb-4">Advanced Photo Facial for Brighter, Even-Toned Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/photo-facial.jpg" alt="Photo Facial">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Photo Facial treatments use advanced USFDA-approved IPL/laser technology
                        to correct sun damage and improve overall skin tone and texture. Every session is personalized
                        after a detailed skin assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        Our approach effectively <strong>Targets Sun Damage, Improves Tone & Texture,</strong>
                        and <strong>Brightens Complexion</strong>. Whether you're looking to correct sun spots or
                        refresh dull, uneven skin, our expert team creates a customized treatment plan to help you
                        achieve a brighter, healthier-looking glow.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Targets Sun Damage</h5>
                                <p class="mb-0 text-secondary">Addresses sun spots and photo-aging at the source.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Tone & Texture</h5>
                                <p class="mb-0 text-secondary">Evens out skin tone while refining overall texture.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Brightens Complexion</h5>
                                <p class="mb-0 text-secondary">Restores a fresher, more radiant glow.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/laser-why-choose.php'); ?>
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
