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
                        <li class="breadcrumb-item active">Weight Maintenance Program</li>
                    </ol>
                    <h2 class="breadcrumb-title">Weight Maintenance Program</h2>
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
                    <span class="service-tag">Weight Maintenance Program</span>

                    <h2 class="mb-4">Weight Maintenance Program for Lasting Results</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/weight-maintenance-program.jpg" alt="Weight Maintenance Program">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Weight Maintenance Program helps you stabilize your results after
                        weight loss with ongoing support and structured planning. Every program is personalized
                        after a detailed progress assessment to ensure your results last well into the future.
                    </p>

                    <p>
                        Our maintenance program includes <strong>weight stabilization plans, ongoing
                        support,</strong> and strategies that focus on <strong>preventing weight regain</strong>.
                        Whether you've just completed a weight loss program or want to safeguard results achieved
                        elsewhere, our expert team creates a customized plan to help you stay on track long term.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Weight Stabilization Plans</h5>
                                <p class="mb-0 text-secondary">Structured plans to help lock in your results.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Ongoing Support</h5>
                                <p class="mb-0 text-secondary">Continued guidance to keep you accountable.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Prevents Weight Regain</h5>
                                <p class="mb-0 text-secondary">Strategies designed to protect your progress long term.</p>
                            </div>
                        </div>

                    </div>

                    <?php include('include/weight-loss-why-choose.php'); ?>
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
