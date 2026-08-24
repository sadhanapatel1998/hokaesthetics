<?php include('include/data.php'); ?>		
		
		<!-- Footer -->
		<footer class="footer-eight footer position-relative">

		    <!-- Marquee -->
		    <div class="horizontal-slide slide-eight d-flex" data-direction="left" data-speed="slow">
		        <div class="slide-list d-flex gap-4">
		            <?php foreach (array_merge($marqueeItems, $marqueeItems) as $item): ?>
		            <div class="services-slide">
		                <h2><?= $item ?></h2>
		            </div>
		            <div class="services-slide"><i class="fa-solid fa-circle"></i></div>
		            <?php endforeach; ?>
		        </div>
		    </div>

		    <!-- Footer Top -->
		    <div class="footer-top">
		        <div class="container">
		            <div class="row g-md-5 g-4">

		                <!-- About -->
		                <div class="col-xl-5 col-lg-12 col-md-6">
		                    <div class="footer-widget footer-about">
		                        <div class="footer-logo mb-4">
		                            <img src="assets/image/logo/hok-logo.png" alt="HOK Aesthetics" class="footer-logo bg-white p-2">
		                        </div>

		                        <div class="footer-about-content mb-3">
		                            <p class="description">
		                                HOK Aesthetics is a premium skin, hair, laser, dental, and wellness clinic in Jodhpur,
		                                combining advanced technology with personalized care for safe, natural-looking
		                                results.
		                            </p>
		                        </div>

		                        <div class="footer-available">
		                            <h4 class="title">We're Available</h4>
		                            <p class="date">Monday – Sunday : 10:00 AM to 7:00 PM</p>
		                        </div>
		                    </div>
		                </div>

		                <!-- Quick Links -->
		                <div class="col-xl-2 col-lg-4 col-md-6">
		                    <div class="footer-widget">
		                        <h5 class="footer-title">Quick Links</h5>

		                        <ul class="footer-menu">
		                            <?php foreach ($footerMenu as $menu): ?>
		                            <li>
		                                <a href="<?= $menu['link']; ?>">
		                                    <i class="fa-solid fa-angle-right"></i>
		                                    <?= $menu['name']; ?>
		                                </a>
		                            </li>
		                            <?php endforeach; ?>
		                        </ul>
		                    </div>
		                </div>

		                <!-- Services -->
		                <div class="col-xl-2 col-lg-4 col-md-6">
		                    <div class="footer-widget">
		                        <h5 class="footer-title">Our Services</h5>

		                        <ul class="footer-menu">
		                            <?php foreach ($footerServices as $service): ?>
		                            <li>
		                                <a href="services.php">
		                                    <i class="fa-solid fa-angle-right"></i>
		                                    <?= $service; ?>
		                                </a>
		                            </li>
		                            <?php endforeach; ?>
		                        </ul>
		                    </div>
		                </div>

		                <!-- Contact -->
		                <div class="col-xl-3 col-lg-4 col-md-6">
		                    <div class="footer-widget">
		                        <h5 class="footer-title">Keep in Touch</h5>

		                        <div class="footer-support">

		                            <div class="support-item mb-3">
		                                <div class="avatar avatar-lg rounded-circle flex-shrink-0">
		                                    <i class="fa-solid fa-location-dot"></i>
		                                </div>

		                                <div>
		                                    <p class="title">Visit Our Clinic</p>
		                                    <h5 class="link">
		                                        B-9, 1st Floor, Shubham Enclave, Paschim Vihar,
		                                        New Delhi – 110063
		                                    </h5>
		                                </div>
		                            </div>

		                            <div class="support-item mb-3">
		                                <div class="avatar avatar-lg rounded-circle flex-shrink-0">
		                                    <i class="fa-solid fa-envelope"></i>
		                                </div>

		                                <div>
		                                    <p class="title">Email Us</p>
		                                    <h5 class="link">
		                                        <a href="mailto:info@hokaesthetics.com">
		                                            info@hokaesthetics.com
		                                        </a>
		                                    </h5>
		                                </div>
		                            </div>

		                            <div class="support-item mb-3">
		                                <div class="avatar avatar-lg rounded-circle flex-shrink-0">
		                                    <i class="fa-solid fa-phone"></i>
		                                </div>

		                                <div>
		                                    <p class="title">Call Us</p>
		                                    <h5 class="link">
		                                        <a href="tel:+919910169317">+91 99101 69317</a>
		                                    </h5>
		                                </div>
		                            </div>

		                        </div>
		                    </div>
		                </div>

		            </div>
		        </div>
		    </div>

		    <!-- Footer Bottom -->
		    <div class="footer-bottom">
		        <div class="container">

		            <div class="copyright">
		                <div class="copyright-text">
		                    <p class="mb-0">
		                        Copyright © <?= date('Y'); ?> HOK Aesthetics. All Rights Reserved.
		                    </p>
		                </div>

		                <div class="social-icon">
		                    <ul class="d-flex align-items-center gap-2 social-item">
		                        <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
		                        <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
		                        <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
		                        <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
		                    </ul>
		                </div>
		            </div>

		        </div>

		        <img class="img-fluid work-bg-one" alt="bg" src="assets/image/bg/work-bg-one.png">
		        <img class="img-fluid work-bg-four" alt="bg" src="assets/image/bg/work-bg-4.png">
		    </div>

		</footer>
		<!-- Footer End -->