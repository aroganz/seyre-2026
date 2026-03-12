<section class="partners-slider-section border-top py-5 bg-white">
    <div class="container-fluid navbar-container-custom">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="compliance-accent-box py-2">
                    <h3 class="fw-bold text-dark-blue mb-0" style="font-size: 1.75rem;">Our Retrocessionnaire Partners</h3>
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="logo-slider">
                    <div class="logo-track">
                        <?php 
                        $logos = ['gic-re-logo.jpg', 'zambia-re.png', 'waica.png', 'tunisre.png', 'tanre.png', 'fbs-re.png'];
                        $loop_logos = array_merge($logos, $logos);
                        foreach ($loop_logos as $logo): 
                        ?>
                        <div class="logo-slide">
                            <img src="<?php echo $base_url; ?>assets/img/<?php echo $logo; ?>" alt="Partner Logo">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section" style="position: relative; margin-top: 60px; background-color: #24568F;">
    
    <div class="footer-brand-pop-out">
        <img src="<?php echo $base_url; ?>assets/img/nairobi-dec-white.png" alt="Nairobi Declaration" class="img-fluid">
    </div>

    <div class="container">
        <div class="row gy-4">
            
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo mb-3">
                    <img src="<?php echo $base_url; ?>assets/img/sey-re-reverse-logo.png" alt="SeyRe Logo" class="img-fluid" style="max-height: 70px;">
                </div>
                <p class="footer-text text-white opacity-75 small">
                    Providing innovative and customized reinsurance solutions across the African continent and global markets with local expertise.
                </p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading text-white fw-bold mb-4">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li class="mb-2"><a href="<?php echo $base_url; ?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                    <li class="mb-2"><a href="<?php echo $base_url; ?>about-us/" class="text-white text-decoration-none opacity-75">About Us</a></li>
                    <li class="mb-2"><a href="<?php echo $base_url; ?>corporate-solutions/" class="text-white text-decoration-none opacity-75">Corporate Solutions</a></li>
                    <li class="mb-2"><a href="<?php echo $base_url; ?>products/" class="text-white text-decoration-none opacity-75">Products</a></li>
                    <li class="mb-2"><a href="<?php echo $base_url; ?>our-forte/" class="text-white text-decoration-none opacity-75">Our Forte</a></li>
                    <li class="mb-2"><a href="<?php echo $base_url; ?>about-us/our-team/" class="text-white text-decoration-none opacity-75">Our Team</a></li>
                    <li class="mb-2"><a href="<?php echo $base_url; ?>blog/" class="text-white text-decoration-none opacity-75">Blog</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading text-white fw-bold mb-4">Quick Contacts</h5>
                <ul class="list-unstyled footer-contact">
                    <li class="mb-2 small"><a href="tel:+233530035168" class="text-white text-decoration-none opacity-75"><i class="bi bi-telephone-fill me-2" style="color: #E0765E;"></i> TECHNICAL CALLS</a></li>
                    <li class="mb-2 small"><a href="mailto:operations@seychellesreinsuranceglobal.com" class="text-white text-decoration-none opacity-75"><i class="bi bi-envelope-fill me-2" style="color: #E0765E;"></i> TECHNICAL EMAILS</a></li>
                    <li class="mb-2 small"><a href="mailto:compliance@seychellesreinsuranceglobal.com" class="text-white text-decoration-none opacity-75"><i class="bi bi-shield-lock-fill me-2" style="color: #E0765E;"></i> COMPLIANCE MATTERS</a></li>
                    <li class="mb-2 small"><a href="mailto:finance@seychellesreinsuranceglobal.com" class="text-white text-decoration-none opacity-75"><i class="bi bi-cash-stack me-2" style="color: #E0765E;"></i> FINANCE MATTERS</a></li>
                    <li class="mb-2 small"><a href="mailto:executiveoffice@seychellesreinsuranceglobal.com" class="text-white text-decoration-none opacity-75"><i class="bi bi-building-fill me-2" style="color: #E0765E;"></i> CORPORATE MATTERS</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading text-white fw-bold mb-4">Global Reach</h5>
                <p class="text-white opacity-75 small mb-4">
                    <i class="bi bi-geo-alt-fill me-2" style="color: #E0765E;"></i> Second St, Holetown, Saint James, Barbados
                </p>
                <div class="social-links-footer">
                    <a href="https://www.linkedin.com/company/seychelles-reinsurance-global-ltd/" target="_blank" class="footer-social-icon me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="https://facebook.com/seyreglobal" target="_blank" class="footer-social-icon me-3"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/seyreglobal/" target="_blank" class="footer-social-icon"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-4 border-secondary opacity-25">

        <div class="row pb-4 align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="copyright-text text-white small opacity-50 mb-0">
                    &copy; 2026 Seychelles Reinsurance Global. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <p class="dev-signature small mb-0">
                    <span class="opacity-50 text-white">Handcrafted by</span> 
                    <a href="https://colorchalk.com" target="_blank" class="chalk-link fw-bold">Colorchalk.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/script.js"></script>
</body>
</html>