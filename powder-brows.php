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
                        <li class="breadcrumb-item active">Permanent Powder Brows</li>
                    </ol>
                    <h2 class="breadcrumb-title">Permanent Powder Brows</h2>
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
                    <span class="service-tag">Permanent Powder Brows</span>

                    <h2 class="mb-4">Permanent Powder Brows for a Soft, Natural Look</h2>

                    <div class="service-main-img mb-4">
                        <img src="assets/image/services/powder-brows.jpg" alt="Permanent Powder Brows">
                    </div>

                    <p class="mb-4">
                        At HOK Aesthetics, our Permanent Powder Brows technique deposits fine dots of pigment to create
                        a soft, shaded, makeup-like finish. Every treatment is personalized after a detailed brow
                        assessment to ensure safe, effective, and natural-looking results with minimal downtime.
                    </p>

                    <p>
                        The gradual shading builds a soft, filled-in look similar to brow powder, without the daily
                        upkeep. Whether you have naturally sparse brows or simply want a low-maintenance, polished look,
                        our expert team creates a customized treatment plan to help you achieve consistently soft,
                        defined brows.
                    </p>

                    <div class="benefits-section mb-4">

                        <h3 class="mb-4">Key Benefits</h3>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Soft, Shaded Finish</h5>
                                <p class="mb-0 text-secondary">Creates a gentle, powder-filled look that suits every style.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Natural, Fuller Appearance</h5>
                                <p class="mb-0 text-secondary">Fills in sparse areas for balanced, defined brows.</p>
                            </div>
                        </div>

                        <div class="benefit-card">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Low Maintenance</h5>
                                <p class="mb-0 text-secondary">Long-lasting shading that reduces daily brow makeup.</p>
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
