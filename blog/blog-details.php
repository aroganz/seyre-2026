<?php 
// 1. Environment Detection & Connection
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $db_host = "localhost"; $db_user = "root"; $db_pass = ""; $db_name = "seyre_local";
} else {
    $db_host = "localhost"; $db_user = "SeyRe"; $db_pass = "@marnath1969$%"; $db_name = "colorcha_seyre2026"; 
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) { die("Connection failed"); }
$conn->set_charset("utf8mb4");

// 2. Get the slug safely
$slug = isset($_GET['slug']) ? $conn->real_escape_string($_GET['slug']) : '';

// 3. Query the article (INCLUDING the new SEO columns)
$sql = "SELECT ID, post_title, post_content, post_date, seo_title, seo_desc FROM p WHERE post_name = '$slug' LIMIT 1";
$result = $conn->query($sql);
$post = $result->fetch_assoc();

if ($post) {
    // 4. Set SEO variables for the header to pick up
    $page_seo_title = !empty($post['seo_title']) ? $post['seo_title'] : $post['post_title'] . " | SeyRe";
    $page_seo_desc  = !empty($post['seo_desc']) ? $post['seo_desc'] : "";
} else {
    $page_seo_title = "Article Not Found";
}

// 5. NOW include the header (it will now see $page_seo_title)
include('../includes/header.php'); 

if (!$post) {
    echo "<div class='container py-5 mt-5 text-center'><h2>Article Not Found</h2><a href='index.php' class='btn btn-primary'>Back to Blog</a></div>";
} else {
    $post_id = $post['ID']; 
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
                        // Fetch related articles excluding the current one
                        $rel_sql = "SELECT post_title, post_name FROM p WHERE ID != $post_id ORDER BY RAND() LIMIT 3";
                        $rel_res = $conn->query($rel_sql);
                        if ($rel_res):
                            while($rel = $rel_res->fetch_assoc()): ?>
                                <div class="col-md-4">
                                    <a href="blog-details.php?slug=<?php echo $rel['post_name']; ?>" class="text-decoration-none">
                                        <div class="p-3 bg-light rounded h-100 border text-center">
                                            <h6 class="text-dark mb-0"><?php echo htmlspecialchars($rel['post_title']); ?></h6>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; 
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
} // End if($post)

// 4. Close connection at the VERY end
if (isset($conn) && $conn instanceof mysqli) {
    $conn->close(); 
}
include('../includes/footer.php'); 
?>