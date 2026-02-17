<?php 
include('../includes/header.php'); 
$conn = new mysqli("localhost", "root", "", "seyre_local");

// 1. Pagination Settings
$limit = 9; // Number of articles per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

$searchTerm = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

// 2. Build Query with LIMIT and OFFSET
$whereClause = "";
if (!empty($searchTerm)) {
    $whereClause = "WHERE post_title LIKE '%$searchTerm%' OR post_content LIKE '%$searchTerm%'";
}

// Get total records for pagination links
$total_results_query = "SELECT COUNT(*) as total FROM p $whereClause";
$total_results_res = $conn->query($total_results_query);
$total_rows = $total_results_res->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $limit);

// Fetch only the articles for the current page
$sql = "SELECT ID, post_title, post_content, post_date, post_name 
        FROM p 
        $whereClause 
        ORDER BY post_date DESC 
        LIMIT $limit OFFSET $offset";

$result = $conn->query($sql);
?>

<section class="archive-header py-5 bg-dark text-white mt-5">
    <div class="container py-lg-4 text-center">
        <h1 class="fw-bold">Insights & Perspectives</h1>
        <p class="lead opacity-75">Explore our latest thoughts on Reinsurance and Global Markets</p>
    </div>
</section>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="index.php" method="GET" class="input-group shadow-sm">
                <input type="text" name="search" class="form-control form-control-lg" 
                       placeholder="Search articles..." 
                       value="<?php echo htmlspecialchars($searchTerm); ?>">
                <button class="btn btn-primary px-4" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<section class="archive-list py-5">
    <div class="container">
        <div class="row g-4">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <small class="text-muted"><?php echo date('M d, Y', strtotime($row['post_date'])); ?></small>
                            <h3 class="h5 fw-bold my-3"><?php echo htmlspecialchars($row['post_title']); ?></h3>
                            <p class="text-muted flex-grow-1">
                                <?php echo substr(strip_tags($row['post_content']), 0, 120); ?>...
                            </p>
                            <a href="blog-details.php?slug=<?php echo $row['post_name']; ?>" class="text-primary fw-bold text-decoration-none mt-3">
                                READ FULL ARTICLE <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php if ($total_pages > 1): ?>
<nav aria-label="Page navigation" class="mt-5 custom-pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php if($page <= 1) echo 'disabled'; ?>">
            <a class="page-link" href="?page=<?php echo $page - 1; ?>&search=<?php echo $searchTerm; ?>">
                <i class="bi bi-arrow-left me-1"></i> Previous
            </a>
        </li>

        <?php for($i = 1; $i <= $total_pages; $i++): ?>
        <li class="page-item <?php if($page == $i) echo 'active'; ?>">
            <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo $searchTerm; ?>"><?php echo $i; ?></a>
        </li>
        <?php endfor; ?>

        <li class="page-item <?php if($page >= $total_pages) echo 'disabled'; ?>">
            <a class="page-link" href="?page=<?php echo $page + 1; ?>&search=<?php echo $searchTerm; ?>">
                Next <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </li>
    </ul>
</nav>
<?php endif; ?>
    </div>
</section>

<?php include('../includes/footer.php'); ?>