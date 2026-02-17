<?php 
// 1. Connection
$conn = new mysqli("localhost", "root", "", "seyre_local");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

include('../../includes/header.php'); 

// 2. Get ID from URL (e.g., member-details.php?id=16062)
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$query = $conn->query("SELECT * FROM team_members WHERE id = $id");
$member = $query->fetch_assoc();

if (!$member) {
    echo "<div class='container mt-5 pt-5 text-center'><h3>Member not found.</h3><a href='index.php'>Back to Team</a></div>";
    include('../../includes/footer.php');
    exit;
}
?>

<section class="py-5 mt-5">
    <div class="container py-lg-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="member-detail-img shadow-lg rounded overflow-hidden">
                    <img src="../../assets/img/team/<?php echo basename($member['featured_image_url']); ?>" 
                         class="img-fluid w-100" 
                         alt="<?php echo htmlspecialchars($member['name']); ?>">
                </div>
                <div class="mt-4 text-center">
                    <?php if(!empty($member['linkedin_url'])): ?>
                        <a href="<?php echo $row['linkedin_url']; ?>" target="_blank" class="btn btn-primary rounded-pill px-4">
                            <i class="bi bi-linkedin me-2"></i>LinkedIn Profile
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-8">
                <h1 class="display-4 fw-bold text-dark mb-1"><?php echo htmlspecialchars($member['name']); ?></h1>
                <h4 class="text-uppercase mb-4" style="color: var(--accent-orange); letter-spacing: 1px;">
                    <?php echo htmlspecialchars($member['job_title']); ?>
                </h4>
                
                <div class="bio-content lead text-muted" style="line-height: 1.8; text-align: justify;">
                    <?php echo nl2br($member['bio']); ?>
                </div>

                <div class="mt-5 pt-4 border-top">
                    <a href="index.php" class="btn btn-outline-secondary rounded-pill">
                        <i class="bi bi-arrow-left me-2"></i>Back to Management Team
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../../includes/footer.php'); ?>