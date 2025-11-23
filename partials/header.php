<header id="sidebar">
    <div class="logo">
        <div class="logo-img">🌍</div>
        <span>SOCSCI 3</span>
    </div>

    <!-- Hamburger for Mobile Only -->
    <button class="hamburger" id="hamburger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav id="nav">
        <div class="nav-links">
            <a href="?page=home" class="<?php echo $page === 'home' ? 'active' : ''; ?>">
                <span class="icon">🏠</span> Home
            </a>
            <a href="?page=syllabus" class="<?php echo $page === 'syllabus' ? 'active' : ''; ?>">
                <span class="icon">📜</span> Syllabus
            </a>
            <a href="?page=lessons" class="<?php echo $page === 'lessons' ? 'active' : ''; ?>">
                <span class="icon">📚</span> Lessons
            </a>
            <a href="?page=about" class="<?php echo $page === 'about' ? 'active' : ''; ?>">
                <span class="icon">ℹ️</span> About
            </a>
            <a href="?page=contact" class="<?php echo $page === 'contact' ? 'active' : ''; ?>">
                <span class="icon">✉️</span> Contact
            </a>
        </div>

        <form class="search-bar" method="GET" action="index.php">
            <input type="hidden" name="page" value="<?php echo $page; ?>">
            <input type="text" name="search" id="searchInput" placeholder="Search..." value="<?php echo $search_query; ?>">
            <button type="submit">🔍</button>
        </form>
    </nav>
</header>

<!-- Add this ID to your main content wrapper in your other file -->
<div id="main-content">
    <!-- Your page content goes here -->
</div>

<script>
    function toggleMenu() {
        document.getElementById('sidebar').classList.toggle('mobile-active');
    }
</script>