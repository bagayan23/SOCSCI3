<?php
$week = isset($_GET['week']) ? intval($_GET['week']) : 1;
if ($week < 1 || $week > 17) {
    $week = 1;
}

$lesson = $lessons[$week];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCSCI 3 - Contemporary World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<a href="?page=lessons" class="btn" style="margin-bottom: 1rem;">← Back to Lessons</a>

<div class="lesson-detail">
    <div class="lesson-header">
        <span class="week-badge">Week <?php echo $week; ?></span>
        <h1><?php echo $lesson['title']; ?></h1>
    </div>

    <div class="card">
        <h3 style="color: var(--teal); margin-bottom: 1rem;">Overview</h3>
        <p><?php echo $lesson['description']; ?></p>
    </div>

    <div class="card">
        <h3 style="color: var(--indigo); margin-bottom: 1rem;">Learning Objectives</h3>
        <ul style="margin-left: 2rem;">
            <?php foreach ($lesson['objectives'] as $objective): ?>
                <li><?php echo $objective; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="card">
        <h3 style="color: var(--teal); margin-bottom: 1rem;">Lesson Content</h3>
        <div class="lesson-text">
            <?php echo nl2br($lesson['content']); ?>
        </div>
    </div>

    <div class="card">
        <h3 style="color: var(--indigo); margin-bottom: 1rem;">Key Takeaways</h3>
        <ul style="margin-left: 2rem;">
            <?php foreach ($lesson['key_points'] as $point): ?>
                <li><?php echo $point; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="lesson-navigation">
        <?php if ($week > 1): ?>
            <a href="?page=lesson-content&week=<?php echo $week - 1; ?>" class="btn">← Previous Lesson</a>
        <?php endif; ?>
        
        <?php if ($week < 17): ?>
            <a href="?page=lesson-content&week=<?php echo $week + 1; ?>" class="btn btn-teal">Next Lesson →</a>
        <?php endif; ?>
    </div>
</div>
<script src="/SOCSCI3/assets/js/script.js"></script>    
</html>