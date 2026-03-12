<?php 
// 1. Environment Detection & Database Connection
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $db_host = "localhost"; $db_user = "root"; $db_pass = ""; $db_name = "seyre_local";
} else {
    $db_host = "localhost"; $db_user = "SeyRe"; $db_pass = "@marnath1969$%"; $db_name = "colorcha_seyre2026"; 
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

include('../../includes/header.php'); 

// 2. Get ID from URL & Sanitize
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Use prepared statement or at least verify ID > 0
$member = null;
if ($id > 0) {
    $query = $conn->query("SELECT * FROM team_members WHERE id = $id");
    $member = $query->fetch_assoc();
}

// 3. Error Handling for missing member
if (!$member) {
    echo "<div class='container mt-5 pt-5 text-center' style='min-height: 50vh;'>
            <h3>Member not found.</h3>
            <p class='text-muted'>The requested profile may have moved or no longer exists.</p>
            <a href='index.php' class='btn btn-primary mt-3'>Back to Team</a>
          </div>";
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
                         alt="<?php echo htmlspecialchars($member['name']); ?>"
                         onerror="this.src='../../assets/img/team/placeholder.jpg';">
                </div>
                <div class="mt-4 text-center">
                    <?php if(!empty($member['linkedin_url'])): ?>
                        <a href="<?php echo htmlspecialchars($member['linkedin_url']); ?>" target="_blank" class="btn btn-primary rounded-pill px-4">
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
                
                <div class="grid-text" style="line-height: 1.8; text-align: justify;">
                    <?php 
                        // Using nl2br to preserve paragraph breaks from the database
                        echo nl2br($member['bio']); 
                    ?>
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

<?php 
$conn->close();
include('../../includes/footer.php'); 
?>