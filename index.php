<?php
$meta_title = "Aarav Jadon Puttanam | Aspiring Software Developer";
$meta_description = "Official portfolio of Aarav Jadon Puttanam, Cambridge Grade 12 student passionate about AI, business, and innovation.";
$meta_keywords = "Aarav Jadon Puttanam, AI student, Cambridge student, aspiring developer";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('./globals/meta.php'); ?>

    <!-- Global CSS -->
    <link rel="stylesheet" href="./globals/header.css">

    <!-- Section CSS -->
    <link rel="stylesheet" href="./Pages/HomePage/HomePage.css">
    <link rel="stylesheet" href="./Pages/HomePage/TechPage/techPage.css">
    <link rel="stylesheet" href="./Pages/HomePage/SportsPage/sportsPage.css">

</head>
<body>

    <?php include('./globals/header.php'); ?>

    <!-- Sections -->
    <section id="home">
        <?php include('./Pages/HomePage/homePage.php'); ?>
    </section>

    <section id="tech">
        <?php include('./Pages/HomePage/TechPage/techPage.php'); ?>
    </section>

    <section id="sports">
        <?php include('./Pages/HomePage/SportsPage/sportsPage.php'); ?>
    </section>

</body>
</html>