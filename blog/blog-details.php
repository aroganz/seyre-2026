<?php 
include('../includes/header.php'); 
$conn = new mysqli("localhost", "root", "", "seyre_local");

// 1. Get the slug from the URL
$slug = isset($_GET['slug']) ? $conn->real_escape_string($_GET['slug']) : '';

// 2. Error handling: If slug is empty
if (empty($slug)) {
    echo "<div class='container py-5 mt-5 text-center'><h2>No article specified.</h2><a href='index.php' class='btn btn-primary'>Return to Blog</a></div>";
    include('../includes/footer.php');
    exit;
}

// 3. Query using the post_name column
$sql = "SELECT ID, post_title, post_content, post_date FROM p WHERE post_name = '$slug' LIMIT 1";
$result = $conn->query($sql);
$post = $result->fetch_assoc();

if (!$post) {
    echo "<div class='container py-5 mt-5 text-center'><h2>Article Not Found</h2><p>We couldn't find an article with the slug: <b>$slug</b></p><a href='index.php' class='btn btn-primary'>Back to Blog</a></div>";
} else {
    $post_id = $post['ID']; // Assigned for use in Related Articles section
?>

<section class="blog-details-header py-5 bg-light border-bottom mt-5">
    <div class="container text-center">
        <p class="text-primary fw-bold mb-2"><?php echo date('F d, Y', strtotime($post['post_date'])); ?></p>
        <h1 class="display-4 fw-bold text-dark"><?php echo htmlspecialchars($post['post_title']); ?></h1>
    </div>
</section>

<section class="blog-body-content py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="blog-text-wrapper mb-5">
                    <?php echo $post['post_content']; ?>
                </article>

                <div class="related-box mt-5 pt-5 border-top">
                    <h4 class="fw-bold mb-4">Related Insights</h4>
                    <div class="row g-3">
                        <?php 
                        // Use $post_id to exclude the current article from suggestions
                        // blog-details.php - Near Line 44
// Change $current_id to $post_id
$rel_sql = "SELECT post_title, post_name FROM p WHERE ID != $post_id ORDER BY RAND() LIMIT 3";
                        $rel_res = $conn->query($rel_sql);
                        while($rel = $rel_res->fetch_assoc()): ?>
                            <div class="col-md-4">
                                <a href="blog-details.php?slug=<?php echo $rel['post_name']; ?>" class="text-decoration-none">
                                    <div class="p-3 bg-light rounded h-100 border text-center">
                                        <h6 class="text-dark mb-0"><?php echo htmlspecialchars($rel['post_title']); ?></h6>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
}
include('../includes/footer.php'); 
?>