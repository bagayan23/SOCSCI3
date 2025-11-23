
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCSCI 3 - Contemporary World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<h1 style="margin-bottom: 2rem; color: var(--indigo);">Course Lessons</h1>
<p style="margin-bottom: 2rem;">Select a week to view detailed lesson content:</p>
<div class="lessons-grid">
    <?php
    for ($i = 1; $i <= 17; $i++) {
        $lesson = $lessons[$i];
        $icon = getIconForLesson($lesson['title'], $lesson['content']);
        echo '<a href="?page=lesson-content&week=' . $i . '" class="lesson-card">';
        echo '<div class="lesson-icon">' . $icon . '</div>';
        echo '<div class="lesson-number">' . sprintf('%02d', $i) . '</div>';
        echo '<h4>' . $lesson['title'] . '</h4>';
        echo '</a>';
    }
    ?>
</div>
<script src="/SOCSCI3/assets/js/script.js"></script>    
</html>