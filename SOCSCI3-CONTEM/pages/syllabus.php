<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCSCI 3 - Contemporary World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<h1 style="margin-bottom: 2rem; color: var(--indigo);">Course Syllabus</h1>
<div class="card" style="margin-bottom: 2rem;">
    <h2 style="color: var(--teal);">SOCSCI 3: The Contemporary World</h2>
    <p><strong>Course Description:</strong> This course introduces students to the contemporary world by examining the multifaceted phenomenon of globalization. It explores political, economic, social, and cultural aspects of our interconnected global society.</p>
    <br>
    <p><strong>Course Objectives:</strong></p>
    <ul style="margin-left: 2rem; margin-top: 0.5rem;">
        <li>Understand the historical context of globalization</li>
        <li>Analyze contemporary global issues</li>
        <li>Develop critical thinking about international relations</li>
        <li>Examine cultural diversity and interconnections</li>
    </ul>
</div>

<table class="syllabus-table">
    <thead>
        <tr>
            <th>Week</th>
            <th>Topic</th>
            <th>Learning Outcomes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $syllabus_data = [
            ['Week 1', 'Introduction to Globalization', 'Define and contextualize globalization'],
            ['Week 2', 'Historical Perspectives', 'Trace the history of global interconnections'],
            ['Week 3', 'Economic Globalization', 'Analyze global economic systems'],
            ['Week 4', 'Political Globalization', 'Examine international governance'],
            ['Week 5', 'Cultural Globalization', 'Explore cultural exchange and diversity'],
            ['Week 6', 'Media and Technology', 'Understand digital globalization'],
            ['Week 7', 'Global Migration', 'Study population movements'],
            ['Week 8', 'Midterm Examination', 'Comprehensive assessment'],
            ['Week 9', 'Environmental Issues', 'Analyze climate change impacts'],
            ['Week 10', 'Global Inequality', 'Examine wealth distribution'],
            ['Week 11', 'Human Rights', 'Study international human rights'],
            ['Week 12', 'Global Health', 'Understand pandemic responses'],
            ['Week 13', 'International Conflicts', 'Analyze global security issues'],
            ['Week 14', 'Sustainable Development', 'Explore SDGs and sustainability'],
            ['Week 15', 'Future of Globalization', 'Project future trends'],
            ['Week 16', 'Review and Presentations', 'Present research projects'],
            ['Week 17', 'Final Examination', 'Comprehensive final assessment']
        ];

        foreach ($syllabus_data as $row) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>

<div class="card" style="margin-top: 2rem;">
    <h3 style="color: var(--indigo);">Grading System</h3>
    <ul style="margin-left: 2rem; margin-top: 1rem;">
        <li>Class Participation: 20%</li>
        <li>Quizzes: 20%</li>
        <li>Midterm Exam: 25%</li>
        <li>Final Exam: 25%</li>
        <li>Project/Presentation: 10%</li>
    </ul>
</div>
 <script src="/SOCSCI3/assets/js/script.js"></script>
</body>
</html>
