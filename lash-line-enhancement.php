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
                        <li class="breadcrumb-item active">Lash Line Enhancement</li>
                    </ol>
                    <h2 class="breadcrumb-title">Lash Line Enhancement</h2>
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
                    <span class="service-tag">Lash Line Enhancement</span>

                    <h2 class="mb-4">Lash Line Enhancement for Thicker, Fuller-Looking Lashes</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/lash-line-enhancement.jpg" alt="Lash Line Enhancement">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Lash Line Enhancement treatment deposits fine pigment between the
                        lashes to create the illusion of thicker, darker lash lines. Every treatment is personalized
                        after a detailed eye assessment to ensure safe, effective, and natural-looking results with
                        minimal downtime.
                    </p>

                    <p>
                        The subtle shading fills in the gaps between lashes, making them appear fuller and more
                        defined without a visible liner effect. Whether you're looking for a barely-there enhancement
                        or a base for a bolder liner look, our expert team creates a customized treatment plan to help
                        you achieve lashes that stand out.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Thicker, Fuller Lashes</h5>
                                <p class="mb-0 text-secondary">Fills gaps between lashes for a denser appearance.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Subtle, Natural Definition</h5>
                                <p class="mb-0 text-secondary">Enhances eyes without a visible, harsh liner line.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Lashes That Stand Out</h5>
                                <p class="mb-0 text-secondary">Long-lasting definition that draws attention to your eyes.</p>
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
