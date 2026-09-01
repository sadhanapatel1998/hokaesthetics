<?php
ob_start();
include('include/data.php');
?>
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" aria-label="home"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                    <h2 class="breadcrumb-title">Gallery</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Start Blog Section -->
<section class="section blog-section-sixteen my-5">
    <div class="container">
        <div class="section-header section-header-ten text-center mb-5">
            <!-- <h2 class="section-title mb-2">Expert Tips for Skin, Hair & Aesthetic Care</h2> -->
            <p class="text-muted mb-0">Gallery images will be available soon.</p>
        </div>
    </div>
</section>
<!-- End Blog Section -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>