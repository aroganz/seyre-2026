<?php 
$conn = new mysqli("localhost", "root", "", "seyre_local");
include('../../includes/header.php'); 
?>

<section class="py-5 mt-5">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="products-main-title text-uppercase">Professional Memberships</h2>
            <div class="title-underline"></div>
            <p class="text-muted mt-3">Seyre Global is proud to be associated with leading industry bodies and professional associations.</p>
        </div>

        <div class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6">
                <h6 class="text-uppercase fw-bold" style="color: var(--accent-orange); letter-spacing: 2px;">CERTIFICATION</h6>
                <h3 class="display-6 fw-bold mb-4" style="color: var(--dark-blue);">MEMBERSHIP</h3>
                <p class="lead text-muted">
                    Seyre Global maintains rigorous professional standards as evidenced by our official certifications and recognized industry status.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="membership-img-wrapper shadow-lg rounded p-2">
                    <a href="../../assets/media/seychelles-re-membership-certificate.pdf" target="_blank">
                        <img src="../../assets/img/seyre-membership-certification.jpg" class="img-fluid rounded" alt="Seyre Membership Certification">
                        <div class="mt-2 text-center small text-primary fw-bold">
                            <i class="bi bi-file-earmark-pdf me-1"></i> VIEW FULL CERTIFICATE
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6 order-last order-lg-first">
                <div class="membership-img-wrapper shadow-lg rounded p-2">
                    <img src="../../assets/img/oesai-membership-certification.jpg" class="img-fluid rounded" alt="OESAI Membership Certification">
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <h6 class="text-uppercase fw-bold" style="color: var(--accent-orange); letter-spacing: 2px;">MEMBERSHIP CERTIFICATION</h6>
                <h3 class="display-6 fw-bold mb-4" style="color: var(--dark-blue);">OESAI</h3>
                
                <p class="text-muted mb-3">
                    SeyRe Global, a provider of reinsurance solutions in Africa and Offshore Islands, has been granted certified membership by the Organisation of Eastern & South African Insurers (OESAI). This certification recognizes SeyRe Global’s commitment to best practices in reinsurance.
                </p>
                <p class="text-muted mb-3">
                    OESAI is a non-profit organization that promotes the development of the insurance industry in Eastern and Southern Africa. Its certified membership program is designed to help organizations improve their insurance practices and reduce their risk exposure.
                </p>
                <p class="text-muted">
                    To become certified, SeyRe Global underwent a rigorous assessment of its reinsurance processes and procedures. The assessment covered all aspects of reinsurance, from risk assessment and underwriting to claims management and compliance.
                </p>
            </div>
        </div>

        <div class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6">
                <h6 class="text-uppercase fw-bold" style="color: var(--accent-orange); letter-spacing: 2px;">MEMBERSHIP CERTIFICATION</h6>
                <h3 class="display-6 fw-bold mb-4" style="color: var(--dark-blue);">BIBA</h3>
                
                <p class="text-muted lead" style="text-align: justify;">
                    Seychelles Reinsurance Global is pleased to announce it has been awarded membership certification by the Barbados International Business Association. This prestigious recognition signifies Seychelles Reinsurance Global’s commitment to international business standards and strengthens its position within the global reinsurance market.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="membership-img-wrapper shadow-lg rounded p-4 bg-white text-center">
                    <img src="../../assets/img/Biba-Logo2020-SM.png" class="img-fluid" style="max-height: 180px;" alt="BIBA Logo">
                </div>
            </div>
        </div>

        <div class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6 order-last order-lg-first">
                <div class="membership-img-wrapper shadow-lg rounded p-2">
                    <img src="../../assets/img/seyre-aio-membership.jpg" class="img-fluid rounded" alt="AIO Membership Certification">
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <h6 class="text-uppercase fw-bold" style="color: var(--accent-orange); letter-spacing: 2px;">MEMBERSHIP CERTIFICATION</h6>
                <h3 class="display-6 fw-bold mb-4" style="color: var(--dark-blue);">AIO</h3>
                
                <p class="text-muted" style="text-align: justify; line-height: 1.8;">
                    Seychelles Global Reinsurance is delighted to announce its official membership in the African Insurance Organisation (AIO). This significant milestone underscores our commitment to fostering a strong and collaborative insurance market within the African continent. 
                </p>
                <p class="text-muted" style="text-align: justify; line-height: 1.8;">
                    As a valued member of the AIO, we look forward to actively participating in initiatives that promote industry best practices, knowledge sharing, and sustainable growth across the African insurance landscape.
                </p>
            </div>
        </div>

        <div class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6">
                <h6 class="text-uppercase fw-bold" style="color: var(--accent-orange); letter-spacing: 2px;">MEMBERSHIP</h6>
                <h3 class="display-6 fw-bold mb-4" style="color: var(--dark-blue);">FANAF</h3>
                
                <p class="text-muted" style="text-align: justify; line-height: 1.8;">
                    Seychelles Reinsurance Global is now a proud member of FANAF (Fédération des Sociétés d’Assurances de Droit National Africaines). This significant step marks a new chapter for the company, fostering greater collaboration and access to the vibrant African insurance and reinsurance market.
                </p>
                <p class="text-muted" style="text-align: justify; line-height: 1.8;">
                    Seychelles Reinsurance Global looks forward to actively contributing to the growth and development of the industry alongside fellow FANAF members, leveraging shared expertise and opportunities within the continent.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="membership-img-wrapper shadow-lg rounded p-4 bg-white text-center">
                    <img src="../../assets/img/fanaf-logo-scaled-1.jpg" class="img-fluid" style="max-height: 180px;" alt="FANAF Logo">
                </div>
            </div>
        </div>

        </div>
</section>



<?php include('../../includes/footer.php'); ?>