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
                        <li class="breadcrumb-item active">Advanced Technology</li>
                    </ol>
                    <h2 class="breadcrumb-title">Advanced Technology</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="technology-section section">
    <div class="container">

        <div class="section-header section-header-ten text-center mb-5">
            <div class="section-sub-title">
                <span class="sec-circle"></span>Advanced Technology
            </div>
            <h2 class="section-title">Innovation. Precision. Transformation.</h2>
            <p>
                Discover the advanced technologies powering safe, effective,
                and natural-looking aesthetic treatments at HOK Aesthetics.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($technologies as $tech): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="tech-card">

                        <div class="tech-img-wrap">
                            <img src="<?= $tech['image']; ?>"
                                alt="<?= htmlspecialchars($tech['title']); ?>">
                        </div>

                        <div class="tech-content">
                            <h4><?= htmlspecialchars($tech['title']); ?></h4>

                            <p><?= htmlspecialchars($tech['desc']); ?></p>

                            <div class="tech-line"></div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>









<?php
$content = ob_get_clean();
require 'layout.php';
?>