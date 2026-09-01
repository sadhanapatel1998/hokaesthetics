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
                        <li class="breadcrumb-item active">Dr. Pawan Mehta</li>
                    </ol>
                    <h2 class="breadcrumb-title">Dr. Pawan Mehta</h2>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- ============ About Dr. Pawan Mehta ============ -->

<section class="doctor-about-section py-5">
    <div class="container">
        <div class="doctor-about-card">
            <div class="row align-items-center g-5">

                <!-- Left Image -->
                <div class="col-lg-5">
                    <div class="doctor-photo-box">

                        <div class="photo-bg-shape"></div>

                        <img src="assets/image/team/dr-pawan-mehta.jpg"
                            alt="Dr. Pawan Mehta"
                            class="img-fluid doctor-photo">

                        <div class="experience-card">
                            <div class="exp-icon">
                                <i class="fa-solid fa-award"></i>
                            </div>

                            <div>
                                <span>25+ Years of Experience</span>
                                <h4>Director & Founder</h4>
                                <small>Urology & Men's Sexual Health</small>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-7">

                    <div class="section-header section-header-ten mb-0">
                        <div class="section-sub-title">
                            <span class="sec-circle" aria-hidden="true"></span>
                            Meet Our Expert
                        </div>
                    </div>

                    <div class="d-flex align-items-baseline flex-wrap">
                        <h2 class="doctor-name">
                            Dr. Pawan Mehta
                        </h2>

                        <h4 class="doctor-degree">
                            &nbsp; MBBS, MS (Gold Medalist), MCh Urology (Gold Medalist)
                        </h4>
                    </div>

                    <div class="about-content">

                        <div class="about-title">
                            <i class="fa-regular fa-user"></i>
                            About Dr. Pawan Mehta
                        </div>

                        <p>
                            Dr. Pawan Mehta is the Director & Founder of HOK Aesthetics and a highly experienced
                            urology specialist with over 25 years of clinical expertise in men's sexual health and
                            urological care.
                        </p>

                        <p>
                            His approach goes beyond prescribing treatment by focusing on understanding the underlying
                            causes of erectile dysfunction, male sexual disorders, and other intimate health concerns
                            through confidential, specialist-led evaluation.
                        </p>

                        <p class="mb-0">
                            <strong><i>
                                    His philosophy is simple—evaluate carefully, personalise treatment, and deliver
                                    evidence-based care with compassion, discretion, and long-term patient support.
                                </i></strong>
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>



<!-- ================= Areas of Expertise ================= -->

<section class="expertise-section section">
    <div class="container">

        <div class="text-center mb-4">
            <span class="expertise-heading divider-left divider-right">
                Areas of Expertise
            </span>
        </div>

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-5 g-3">

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-heart-pulse"></i></div>
                    <span>Erectile Dysfunction</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-gender-male"></i></div>
                    <span>Male Sexual Disorders</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-shield-check"></i></div>
                    <span>Sexual Health Evaluation</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-clipboard2-pulse"></i></div>
                    <span>Urological Care</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-hospital"></i></div>
                    <span>Penile Disorders</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-droplet-half"></i></div>
                    <span>Urethral Disorders</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-search"></i></div>
                    <span>Root Cause Diagnosis</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-stars"></i></div>
                    <span>Regenerative Therapies</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-person-check"></i></div>
                    <span>Personalized Treatment</span>
                </div>
            </div>

            <div class="col d-flex">
                <div class="expertise-item h-100 w-100">
                    <div class="expertise-icon"><i class="bi bi-arrow-repeat"></i></div>
                    <span>Long-Term Follow-up</span>
                </div>
            </div>

        </div>

    </div>
</section>



<?php
$content = ob_get_clean();
require 'layout.php';
?>