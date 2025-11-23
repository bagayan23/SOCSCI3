<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCSCI 3 - Contemporary World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<div class="hero">
    <h1>Welcome to Contemporary World</h1>
    <p>Explore global issues, cultures, and interconnections in our modern society</p>
</div>

<div class="card-grid">
    <div class="card">
        <div class="card-icon">📚</div>
        <h3>17 Weeks</h3>
        <p>Comprehensive lessons covering contemporary global issues and themes</p>
        <br>
        <a href="?page=lessons" class="btn">View Lessons</a>
    </div>
    <div class="card">
        <div class="card-icon">📋</div>
        <h3>Course Syllabus</h3>
        <p>Detailed course outline, objectives, and grading criteria</p>
        <br>
        <a href="?page=syllabus" class="btn btn-teal">View Syllabus</a>
    </div>
    <div class="card">
        <div class="card-icon">🌐</div>
        <h3>Global Perspective</h3>
        <p>Understanding diverse cultures and international relations</p>
        <br>
        <a href="?page=about" class="btn">Learn More</a>
    </div>
</div>

<div class="featured-section">
    <h2 style="text-align: center; color: var(--indigo); margin-bottom: 2rem;">Latest Topics</h2>
    <div class="card-grid">
        <?php 
        $featured_weeks = [1, 9, 14];
        foreach ($featured_weeks as $week_num) {
            if (isset($lessons[$week_num])) {
                $lesson = $lessons[$week_num];
                echo '<div class="card">';
                echo '<h4 style="color: var(--teal);">Week ' . $week_num . '</h4>';
                echo '<h3>' . $lesson['title'] . '</h3>';
                echo '<p>' . substr($lesson['description'], 0, 100) . '...</p>';
                echo '<br><a href="?page=lesson-content&week=' . $week_num . '" class="btn">Read More</a>';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>
</html>