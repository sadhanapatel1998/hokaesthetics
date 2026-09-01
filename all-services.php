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
                        <li class="breadcrumb-item"><a href="index.php" aria-label="home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active">All Services</li>
                    </ol>
                    <h2 class="breadcrumb-title">All Services</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="categories-section-three section" style="background-color: #FDF7F6;">
    <div class="container">

        <?php foreach ($services as $slug => $service): ?>

            <!-- Category Section -->
            <section class="service-category-section" id="<?= $slug; ?>">

                <!-- Category Heading -->
                <div class="row align-items-center mb-4">
                    <div class="col-12">
                        <div class="section-header mb-0 text-center">
                            <span class="section-sub-title" style="color:#730115">
                                <i class="<?= $service['icon']; ?> me-2"></i>
                                Our Services
                            </span>
                            <h2 class="section-title"><?= htmlspecialchars($service['title']); ?></h2>
                        </div>
                    </div>
                </div>

                <!-- Related Sub Services -->
                <div class="row">
                    <?php foreach ($service['subs'] as $sub): ?>

                        <?php
                        $page = strtolower($sub['name']);
                        $page = preg_replace('/\s*&\s*|\band\b/i', ' ', $page);
                        $page = preg_replace('/[^a-z0-9]+/', '-', $page);
                        $page = trim($page, '-');
                        ?>

                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="hok-service-card mx-0">

                                <div class="hok-service-img-wrap">
                                    <img src="<?= $sub['image']; ?>"
                                        alt="<?= htmlspecialchars($sub['name']); ?>"
                                        class="img-fluid">

                                    <div class="hok-service-icon">
                                        <i class="<?= $service['icon']; ?>"></i>
                                    </div>
                                </div>

                                <div class="hok-service-content">
                                    <span class="service-category">
                                        <?= htmlspecialchars($service['title']); ?>
                                    </span>

                                    <h4><?= htmlspecialchars($sub['name']); ?></h4>

                                    <div class="hok-service-tags">
                                        <a href="<?= $page; ?>.php" class="btn hok-service-btn">
                                            Learn More
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </section>

        <?php endforeach; ?>

    </div>
</section>


<?php
$content = ob_get_clean();
require 'layout.php';
?>