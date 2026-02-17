<?php 
// 1. Connection
$conn = new mysqli("localhost", "root", "", "seyre_local");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include('../../includes/header.php'); 

// 2. Fetch data sorted by our manual sort_order
$result = $conn->query("SELECT * FROM team_members ORDER BY sort_order ASC, name ASC");
?>

<section class="py-5 mt-5">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="products-main-title text-uppercase">Our Management Team</h2>
            <div class="title-underline"></div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card border-0 shadow-sm h-100">
                        <div class="product-img-wrapper" style="height: 320px;">
                            <?php 
                                $img_name = basename($row['featured_image_url']); 
                                $detail_url = "member-details.php?id=" . $row['id'];
                            ?>
                            <a href="<?php echo $detail_url; ?>">
                                <img src="../../assets/img/team/<?php echo $img_name; ?>" 
                                     class="product-img" 
                                     alt="<?php echo htmlspecialchars($row['name']); ?>"
                                     onerror="this.src='../../assets/img/team/placeholder.jpg';">
                            </a>
                            <div class="product-overlay"></div>
                        </div>
                        
                        <div class="product-content text-center">
                            <h5 class="product-title mb-1">
                                <a href="<?php echo $detail_url; ?>" class="text-decoration-none text-dark">
                                    <?php echo htmlspecialchars($row['name']); ?>
                                </a>
                            </h5>
                            
                            <p class="small fw-bold text-uppercase mb-2" style="color: var(--accent-orange);">
                                <?php echo htmlspecialchars($row['job_title']); ?>
                            </p>
                            
                            <p class="product-text small mb-3">
                                <i class="bi bi-geo-alt-fill text-primary"></i> <?php echo htmlspecialchars($row['demography']); ?>
                            </p>
                            
                            <div class="mt-3">
                                <a href="<?php echo $detail_url; ?>" class="product-link">
                                    READ FULL BIO <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">The team data is being updated.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include('../../includes/footer.php'); ?>