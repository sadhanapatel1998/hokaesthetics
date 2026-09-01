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
                        <li class="breadcrumb-item active">Our Team</li>
                    </ol>
                    <h2 class="breadcrumb-title">Our Team</h2>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="team-section-seven section">
    <div class="container">
        <div class="row g-4 align-center text-center ">
            <div class="col-xl-8 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                <div class="section-header section-header-ten mb-5">
                    <div class="section-sub-title">
                        <span class="sec-circle" aria-hidden="true"></span>Meet Our Expert Team
                    </div>
                    <h2 class="section-title">Meet Our Specialists</h2>
                    <p>
                        Our experienced specialists combine medical expertise, advanced techniques, and personalized care to deliver safe, natural-looking results with precision and compassion.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4 align-center">
            <?php foreach ($team as $doctor): ?>

                <div class="col-xl-3 col-md-3 d-flex wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                    <div class="team-item-seven flex-fill">

                        <a class="team-img" href="<?php echo $doctor['link']; ?>" data-discover="true">
                            <img class="img-fluid"
                                alt="<?php echo $doctor['name']; ?>"
                                src="<?php echo $doctor['image']; ?>">
                        </a>

                        <div class="team-content">
                            <h3 class="custom-title">
                                <a href="<?php echo $doctor['link']; ?>">
                                    <?php echo $doctor['name']; ?>
                                </a>
                            </h3>

                            <span class="team-badge">
                                <?php echo $doctor['designation']; ?>
                            </span>
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