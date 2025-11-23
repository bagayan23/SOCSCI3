<?php
session_start();
require_once 'config.php';
require_once 'data/lessons.php';

// Get current page from URL parameter, default to 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$week = isset($_GET['week']) ? intval($_GET['week']) : null;

// Validate page to prevent directory traversal
$allowed_pages = ['home', 'syllabus', 'lessons', 'lesson-content', 'about', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Handle search
$search_query = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '';
$search_results = [];

if ($search_query) {
    foreach ($lessons as $week_num => $lesson) {
        if (stripos($lesson['title'], $search_query) !== false || 
            stripos($lesson['content'], $search_query) !== false) {
            $search_results[] = [
                'week' => $week_num,
                'title' => $lesson['title']
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCSCI 3 - Contemporary World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/SOCSCI3/assets/css/style.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <?php include 'partials/sidebar.php'; ?>

    <main class="container">
        <?php 
        if ($search_query) {
            echo '<div class="search-results active">';
            echo '<h3>Search Results for "' . $search_query . '"</h3>';
            if (count($search_results) > 0) {
                foreach ($search_results as $result) {
                    echo '<div class="search-result-item">';
                    echo '<a href="?page=lesson-content&week=' . $result['week'] . '">';
                    echo '<strong>Week ' . $result['week'] . ':</strong> ' . $result['title'];
                    echo '</a></div>';
                }
            } else {
                echo '<p>No results found.</p>';
            }
            echo '</div>';
        }
        
        $page_file = 'pages/' . $page . '.php';
        if (file_exists($page_file)) {
            include $page_file;
        } else {
            include 'pages/home.php';
        }
        ?>
    </main>

    <?php include 'partials/footer.php'; ?>

    <script src="/SOCSCI3/assets/js/script.js"></script>
</body>
</html>