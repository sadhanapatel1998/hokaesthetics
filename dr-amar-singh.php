<?php
ob_start();
?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php" aria-label="home">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Dr. Amar Singh</li>
                    </ol>
                    <h2 class="breadcrumb-title">Dr. Amar Singh</h2>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- ============ About Dr. Amar Singh ============ -->

<section class="doctor-about-section py-5">
    <div class="container">
        <div class="doctor-about-card">
            <div class="row align-items-center g-5">

                <div class="col-lg-5">
                    <div class="doctor-photo-box">

                        <div class="photo-bg-shape"></div>

                        <img src="assets/image/team/dr-amar-singh.jpg"
                            alt="Dr. Amar Singh"
                            class="img-fluid doctor-photo">

                        <div class="experience-card">
                            <div class="exp-icon">
                                <i class="fa-solid fa-award"></i>
                            </div>

                            <div>
                                <span>Plastic Surgery Expert</span>
                                <h4>Consultant</h4>
                                <small>Facial Aesthetic Plastic Surgeon</small>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">

                    <div class="section-header section-header-ten mb-0">
                        <div class="section-sub-title">
                            <span class="sec-circle"></span>
                            Meet Our Expert
                        </div>
                    </div>

                    <div class="d-flex align-items-baseline flex-wrap">
                        <h2 class="doctor-name">
                            Dr. Amar Singh
                        </h2>

                        <h4 class="doctor-degree">
                            &nbsp; MBBS, MS, MCh – Plastic Surgery
                        </h4>
                    </div>

                    <div class="about-content">

                        <div class="about-title">
                            <i class="fa-regular fa-user"></i>
                            About Dr. Amar Singh
                        </div>

                        <p>
                            Dr. Amar Singh is a Consultant Facial Aesthetic Plastic Surgeon specializing in aesthetic
                            and cosmetic surgery with expertise in both surgical and non-surgical facial enhancement.
                        </p>

                        <p>
                            His patient-first approach combines advanced techniques with personalized treatment planning
                            to deliver balanced, natural-looking results while maintaining safety and precision.
                        </p>

                        <p class="mb-0">
                            <strong><i>
                                    Dedicated to enhancing confidence through refined facial aesthetics and advanced
                                    plastic surgery expertise.
                                </i></strong>
                        </p>

                    </div>

                    <!-- Credentials -->

                    <div class="about-content mt-4">

                        <div class="about-title">
                            <i class="fa-solid fa-certificate"></i>
                            Credentials
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2"
                                    style="font-size:8px;"></i>MBBS, MS – General Surgery</li>

                            <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2"
                                    style="font-size:8px;"></i>MCh – Plastic Surgery</li>

                            <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2"
                                    style="font-size:8px;"></i>Fellowship in Aesthetic & Cosmetic Surgery</li>

                            <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2"
                                    style="font-size:8px;"></i>Advanced Training in Non-Surgical Aesthetic Procedures
                            </li>

                            <li><i class="fa-solid fa-circle text-warning me-2"
                                    style="font-size:8px;"></i>National & International Conference Presentations &
                                Trainings</li>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- ================= Expertise ================= -->

<section class="expertise-section section">
    <div class="container">

        <div class="text-center mb-4">
            <span class="expertise-heading divider-left divider-right">
               Area of Expertise
            </span>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-3">

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-person-badge"></i></div>
                    <span>Aesthetic & Cosmetic Surgery</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-stars"></i></div>
                    <span>Non-Surgical Treatments</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="fa-solid fa-syringe"></i></div>
                    <span>Botox & Fillers</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-droplet-half"></i></div>
                    <span>Skin Rejuvenation</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-person-standing"></i></div>
                    <span>Body Contouring</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-heart"></i></div>
                    <span>Fat Grafting</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-lightning-charge"></i></div>
                    <span>Laser Therapies</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-sun"></i></div>
                    <span>Advanced Skin Therapies</span>
                </div>
            </div>

        </div>

    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>