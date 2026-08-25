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
                        <li class="breadcrumb-item active">Acne Treatment</li>
                    </ol>
                    <h2 class="breadcrumb-title">Acne Treatment</h2>
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
                    <span class="service-tag">Acne Treatment</span>

                    <h2 class="mb-4">Advanced Acne Treatment for Clearer, Healthier Skin</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/acne-treatment.jpg" alt="Acne Treatment">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Acne Treatment uses advanced USFDA-approved laser technology to target
                        acne-causing bacteria and calm active breakouts at the source. Every session is personalized
                        after a detailed skin assessment to ensure safe, effective, and comfortable results with minimal
                        downtime.
                    </p>

                    <p>
                        Our approach is designed to deliver <strong>Reduces Active Acne, Kills Acne Causing Bacteria,</strong>
                        and <strong>Improves Skin Clarity</strong>. Whether you're dealing with mild breakouts or
                        persistent acne, our expert team creates a customized treatment plan to help you achieve
                        clearer, healthier-looking skin.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Reduces Active Acne</h5>
                                <p class="mb-0 text-secondary">Calms current breakouts and helps prevent new ones from forming.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Kills Acne Causing Bacteria</h5>
                                <p class="mb-0 text-secondary">Targets the bacteria responsible for inflammation and breakouts.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Improves Skin Clarity</h5>
                                <p class="mb-0 text-secondary">Leaves skin looking clearer, calmer, and more even-toned.</p>
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
