<?php
// Base URL for XAMPP
$base_url = "http://localhost/seyre-global-2026/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seychelles Reinsurance Global</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
</head>
<body>

<div class="top-bar">
    <div class="container-fluid navbar-container-custom">
        <div class="row align-items-center g-0">
            <div class="col-lg-5 col-6">
                <div class="top-bar-item py-2">
                    <span class="mission-text">Providing Innovative Re-Insurance Solutions to Africa and Beyond.</span>
                </div>
            </div>
            
            <div class="col-lg-2 col-6 border-sep">
                <div class="top-bar-item py-2 ps-lg-3 text-end text-lg-start"> 
                    <a href="tel:+13473687375" class="top-bar-link justify-content-end justify-content-lg-start">
                        <i class="bi bi-telephone-fill me-1"></i> Technical Calls
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-6 border-sep border-mobile-top">
                <div class="top-bar-item py-2 ps-lg-3">
                    <a href="mailto:operations@seychellesreinsuranceglobal.com" class="top-bar-link text-start">
                        <i class="bi bi-envelope-fill me-1"></i> Technical Email
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-6 border-sep border-mobile-top">
                <div class="top-bar-item py-2 ps-lg-3 text-end text-lg-start">
                    <a href="<?php echo $base_url; ?>assets/media/seyre-global-profile-21-01-26-rdc.pdf" target="_blank" class="top-bar-link justify-content-end justify-content-lg-start">
                        <i class="bi bi-file-earmark-pdf-fill me-1"></i> Download Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-2">
    <div class="container-fluid navbar-container-custom">
        <a class="navbar-brand" href="<?php echo $base_url; ?>">
            <img src="<?php echo $base_url; ?>assets/img/seyre-global-logo-2023.svg" alt="SeyRe Global" class="main-logo">
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title fw-bold text-primary" id="offcanvasNavbarLabel">Navigation Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link mx-2" href="<?php echo $base_url; ?>">Home</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 d-flex justify-content-between align-items-center" href="<?php echo $base_url; ?>about-us/" id="aboutDropdown">
                            About Us <i class="bi bi-chevron-down dropdown-arrow ms-2"></i>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/#our-story">OUR STORY</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/#strategy">STRATEGY</a></li> 
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/#mission">MISSION</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/#mission">VISION</a></li>
                            <li><hr class="dropdown-divider bg-white opacity-25"></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/our-team/">OUR TEAM</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/compliance/">COMPLIANCE</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us/membership/">MEMBERSHIP</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 d-flex justify-content-between align-items-center" href="<?php echo $base_url; ?>corporate-solutions/" id="corpDropdown">
                            Corporate Solutions <i class="bi bi-chevron-down dropdown-arrow ms-2"></i>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="corpDropdown">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>corporate-solutions/#quotes">QUOTES</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>corporate-solutions/#policy-reviews">POLICY REVIEWS</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>corporate-solutions/#policy-structuring">POLICY STRUCTURING</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>corporate-solutions/#wording-reviews">WORDING REVIEWS</a></li>
                            <li><hr class="dropdown-divider bg-white opacity-25"></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>corporate-solutions/faq/">REINSURANCE SOLUTIONS FAQ</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
    <a class="nav-link mx-2 d-flex justify-content-between align-items-center" href="<?php echo $base_url; ?>our-forte/" id="forteDropdown">
        Our Forte <i class="bi bi-chevron-down dropdown-arrow ms-2"></i>
    </a>
    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="forteDropdown">
        <li><a class="dropdown-item" href="<?php echo $base_url; ?>our-forte/#market">MARKET</a></li>
        <li><a class="dropdown-item" href="<?php echo $base_url; ?>our-forte/#charity">CHARITY</a></li>
        <li><a class="dropdown-item" href="<?php echo $base_url; ?>our-forte/#sustainability">SUSTAINABILITY</a></li>
    </ul>
</li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 d-flex justify-content-between align-items-center" href="<?php echo $base_url; ?>products/" id="productsDropdown">
                            Products <i class="bi bi-chevron-down dropdown-arrow ms-2"></i>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/#marine">MARINE</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/#property">PROPERTY</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/#engineering">ENGINEERING</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/#risk-management">RISK MANAGEMENT</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/#training">TRAINING</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/#portfolio-management">PORTFOLIO MANAGEMENT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link mx-2" href="<?php echo $base_url; ?>blog/">Blog</a></li>
                    <li class="nav-item ms-lg-3">
    <a class="btn btn-primary px-4 rounded-pill shadow-sm" href="<?php echo $base_url; ?>contact/">Contact Us</a>
</li>
                </ul>
            </div>
        </div>
    </div>
</nav>