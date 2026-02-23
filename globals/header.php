<!-- HEADER START -->
<header class="main-header">
    <div class="header-container">

        <div class="logo">
            <a href="index.php">AARAV JADON PUTTNAM</a>
        </div>

        <nav class="nav-menu" id="navMenu">
            <a href="index.php">Home</a>
            <!-- <a href="about.php">About</a> -->
            <a href="tech.php">Tech</a>
            <a href="sports.php">Sports</a>
            <a href="community.php">Community</a>
            <a href="Milestone.php">Recognition</a>
        </nav>

        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
</header>

<script>
function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("active");
}
</script>
<!-- HEADER END -->