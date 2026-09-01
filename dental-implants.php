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
                        <li class="breadcrumb-item active">Dental Implants</li>
                    </ol>
                    <h2 class="breadcrumb-title">Dental Implants</h2>
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
                    <span class="service-tag">Dental Implants</span>

                    <h2 class="mb-4">Dental Implants for Permanent, Natural-Feeling Teeth</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/dental-implants.jpg" alt="Dental Implants">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Dental Implants provide a permanent, natural-feeling solution for
                        missing teeth by replacing both the root and crown. Every procedure is personalized after a
                        detailed dental and bone assessment to ensure safe, effective, and long-lasting results.
                    </p>

                    <p>
                        A titanium implant is placed to act as an artificial tooth root, fusing with the jawbone to
                        provide a stable foundation for a crown. Whether you're missing a single tooth or several, our
                        expert team creates a customized treatment plan to help you achieve a strong, natural-looking,
                        fully functional smile.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Permanent Tooth Replacement</h5>
                                <p class="mb-0 text-secondary">A stable, long-term solution for missing teeth.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Preserves Jawbone Health</h5>
                                <p class="mb-0 text-secondary">Helps prevent bone loss associated with missing teeth.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural Look & Function</h5>
                                <p class="mb-0 text-secondary">Looks, feels, and functions like a natural tooth.</p>
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
