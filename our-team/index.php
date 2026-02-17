<?php 
// 1. Database Connection
$conn = new mysqli("localhost", "root", "", "seyre_local");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include('../includes/header.php'); 

// 2. Fetch the data from your newly fixed table
$result = $conn->query("SELECT * FROM team_members ORDER BY id ASC");
?>

<section class="py-5 mt-5">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="products-main-title text-uppercase">Our Management Team</h2>
            <div class="title-underline"></div>
            <p class="text-muted mx-auto mt-3" style="max-width: 800px;">
                Our leadership brings together diverse expertise and decades of experience in the global reinsurance market.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card border-0 shadow-sm h-100">
                        <div class="product-img-wrapper" style="height: 320px;">
                            <?php 
                                // Extracts 'filename.jpg' from the live URL in your DB
                                $img_name = basename($row['featured_image_url']); 
                            ?>
                            <img src="../assets/img/team/<?php echo $img_name; ?>" 
                                 class="product-img" 
                                 alt="<?php echo htmlspecialchars($row['name']); ?>"
                                 onerror="this.src='../assets/img/team/placeholder.jpg';">
                            <div class="product-overlay"></div>
                        </div>
                        
                        <div class="product-content text-center">
                            <h5 class="product-title mb-1" style="min-height: auto;">
                                <?php echo htmlspecialchars($row['name']); ?>
                            </h5>
                            
                            <p class="small fw-bold text-uppercase mb-2" style="color: var(--accent-orange);">
                                <?php echo htmlspecialchars($row['job_title']); ?>
                            </p>
                            
                            <p class="product-text small mb-3">
                                <i class="bi bi-geo-alt-fill text-primary"></i> 
                                <?php echo htmlspecialchars($row['demography']); ?>
                            </p>
                            
                            <?php if(!empty($row['linkedin_url'])): ?>
                                <a href="<?php echo $row['linkedin_url']; ?>" target="_blank" class="product-link">
                                    <i class="bi bi-linkedin"></i> View Profile
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">Team data is being updated. Please check back soon.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include('../includes/footer.php'); ?>