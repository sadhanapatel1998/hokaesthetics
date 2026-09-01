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
                        <li class="breadcrumb-item active">Hair Transplant</li>
                    </ol>
                    <h2 class="breadcrumb-title">Hair Transplant</h2>
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
                    <span class="service-tag">Hair Transplant</span>

                    <h2 class="mb-4">Advanced Hair Transplant for Permanent, Natural Results</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/hair-transplant.jpg" alt="Hair Transplant">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Hair Transplant procedures use advanced surgical techniques to restore hair
                        in areas of thinning or baldness with precision and care. Every procedure is personalized after a
                        detailed scalp and donor-area assessment to ensure safe, effective, and natural-looking results.
                    </p>

                    <p>
                        Our advanced hair restoration approach is built on <strong>FUE Technique, Natural Hairline Design,</strong>
                        and <strong>Permanent & Natural Results</strong>. Whether you're looking to restore a receding
                        hairline or fill in thinning areas, our expert team creates a customized treatment plan to help
                        you achieve a fuller, natural-looking head of hair.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>FUE Technique</h5>
                                <p class="mb-0 text-secondary">Minimally invasive extraction for faster healing and minimal scarring.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural Hairline Design</h5>
                                <p class="mb-0 text-secondary">Artistically designed hairlines that suit your facial structure.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Permanent & Natural Results</h5>
                                <p class="mb-0 text-secondary">Long-lasting hair growth that looks and feels completely natural.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/hair-why-choose.php'); ?>
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
