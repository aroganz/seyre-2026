<?php 
// 1. Force Debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Direct Connection (Hardcoded for GoDaddy to bypass any detection issues)
$db_host = "localhost"; 
$db_user = "SeyRe"; 
$db_pass = "@marnath1969$%"; 
$db_name = "colorcha_seyre2026"; 

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// 3. Check connection
if ($conn->connect_error) {
    echo "<div style='color:red; padding:20px; border:1px solid red;'>";
    echo "<strong>Connection Failed:</strong> " . $conn->connect_error;
    echo "</div>";
    exit; // Stop here so we don't get a 500 error later
}

$conn->set_charset("utf8");

// 4. Fetch the data
$result = $conn->query("SELECT * FROM team_members ORDER BY id ASC");

if (!$result) {
    echo "<strong>Query Error:</strong> " . $conn->error;
    exit;
}

include('../includes/header.php'); 
?>

<section class="py-5 mt-5">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="products-main-title text-uppercase">Our Management Team</h2>
            <div class="title-underline mx-auto"></div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100 text-center p-3">
                        <h5 class="fw-bold mb-1"><?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="small fw-bold text-uppercase mb-2 text-primary">
                            <?php echo htmlspecialchars($row['job_title']); ?>
                        </p>
                        <p class="text-muted small">
                            <?php echo htmlspecialchars($row['demography']); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <p>No team data found in table 'team_members'.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php 
$conn->close();
include('../includes/footer.php'); 
?>