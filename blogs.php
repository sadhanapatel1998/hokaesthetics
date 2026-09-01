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
                        <li class="breadcrumb-item active">>Our Blogs</li>
                    </ol>
                    <h2 class="breadcrumb-title">Our Blogs</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Start Blog Section -->
<section class="section blog-section-sixteen">
    <div class="container">
        <div class="section-header section-header-ten text-center wow fadeInUp mb-5" data-wow-duration="1s">
            <div class="section-sub-title">
                <span class="sec-circle" aria-hidden="true"></span>Latest Blogs
            </div>
            <h2 class="section-title mb-2">Expert Tips for Skin, Hair & Aesthetic Care</h2>
            <p>
                Explore expert insights, treatment guides, and beauty tips from HOK Aesthetics to help you make informed decisions for healthier skin, stronger hair, and lasting confidence.
            </p>
        </div>
        <div class="row justify-content-center row-gap-4 blog-row-sixteen">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-item-sixteen wow fadeInUp" data-wow-duration="1s">
                        <div class="blog-overlay">
                            <a href="javascript:void(0)" class="blog-tag"><?= htmlspecialchars($blog['category']); ?></a>

                            <img src="<?= $blog['image']; ?>"
                                alt="<?= htmlspecialchars($blog['title']); ?>"
                                class="img-fluid blog-img">
                        </div>
                        <div class="blog-content">
                            <div class="blog-info">
                                <h3 class="custom-title">
                                    <a href="javascript:void(0)"><?= htmlspecialchars($blog['title']); ?></a>
                                </h3>
                                <p class="desc"><?= htmlspecialchars($blog['desc']); ?></p>
                            </div>
                            <div class="blog-author justify-content-end">
                                <div class="blog-date">
                                    <i class="fa-regular fa-calendar me-1"></i>
                                    <?= htmlspecialchars($blog['date']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Blog Section -->










<?php
$content = ob_get_clean();
require 'layout.php';
?>