<?php
// 1. Connection
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $db_host = "localhost"; $db_user = "root"; $db_pass = ""; $db_name = "seyre_local";
    $base_url = "http://localhost/seyre-global-2026/";
} else {
    $db_host = "localhost"; $db_user = "SeyRe"; $db_pass = "@marnath1969$%"; $db_name = "colorcha_seyre2026"; 
    $base_url = "https://colorchalk.com/seyre-2026/";
}

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
$conn->set_charset("utf8mb4");

// 2. Start XML Output
$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// 3. Add Static Pages
$static_pages = ['', 'about-us/', 'about-us/compliance/', 'about-us/membership/', 'about-us/our-team/', 'corporate-solutions/', 'our-forte/'];
foreach($static_pages as $page) {
    $xml .= '<url><loc>' . $base_url . $page . '</loc><priority>0.8</priority></url>';
}

// 4. Add 591 Blog Posts
$result = $conn->query("SELECT post_name FROM p");
while($row = $result->fetch_assoc()) {
    $xml .= '<url><loc>' . $base_url . 'blog/' . $row['post_name'] . '/</loc><priority>0.6</priority></url>';
}

$xml .= '</urlset>';

// 5. Save to file
file_put_contents('sitemap.xml', $xml);
echo "Sitemap generated successfully! View it at: " . $base_url . "sitemap.xml";
$conn->close();
?>