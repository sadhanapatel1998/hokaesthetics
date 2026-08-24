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
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                    <h2 class="breadcrumb-title">Contact Us</h2>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="section-inner-header contact-inner-header">
                    <h6>Get in Touch</h6>
                    <h2>We're Here to Help You</h2>
                </div>

                <!-- Address -->
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Visit Our Clinic</h4>
                            <p>B-9, 1st Floor, Shubham Enclave, Paschim Vihar, New Delhi – 110063</p>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Call Us</h4>
                            <p><a href="tel:+919910169317">+91 99101 69317</a></p>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Us</h4>
                            <p><a href="mailto:Info@hokaesthetics.com">Info@hokaesthetics.com</a></p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Business Hours</h4>
                            <p>Monday – Sunday | 10:00 AM – 7:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 d-flex">
                <div class="card contact-form-card w-100">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Name</label><input class="form-control"
                                            type="text"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Email</label><input class="form-control"
                                            type="text"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Phone Number</label><input
                                            class="form-control" type="text"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3"><label class="form-label">Services</label><input
                                            class="form-control" type="text"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3"><label class="form-label">Message</label><textarea
                                            class="form-control" rows="6"></textarea></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group-btn mb-0"><button type="submit"
                                            class="btn btn-secondary">Send Message</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Map -->
<div class="contact-map d-flex">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14002.867206248444!2d77.08324798999652!3d28.66819711455467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0561aa6112b1%3A0x5eaadc80ffa737d!2sHOK%20Aesthetics!5e0!3m2!1sen!2sin!4v1787570664354!5m2!1sen!2sin"
        allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>
<!-- /Contact Map -->
<?php
$content = ob_get_clean();
require 'layout.php';
?>