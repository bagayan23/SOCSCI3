<header>
    <div class="header-container">
        <a href="?page=home" class="logo">
            <div class="logo-img">🗺️</div>
            <span>SOCSCI 3</span>
        </a>

        <form class="search-bar" method="GET" action="index.php">
            <input type="hidden" name="page" value="<?php echo $page; ?>">
            <input type="text" name="search" id="searchInput" placeholder="Search..." value="<?php echo $search_query; ?>">
            <button type="submit">🔍</button>
        </form>

        <button class="theme-toggle" id="themeToggle">🌙</button>

        <button class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
