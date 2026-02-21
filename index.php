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
    <link rel="stylesheet" href="./pages/HomePage/HomePage.css">
    <link rel="stylesheet" href="./pages/HomePage/TechPage/techPage.css">
    <link rel="stylesheet" href="./Pages/HomePage/SportsPage/sportsPage.css">

</head>
<body>

    <?php include('./globals/header.php'); ?>

    <!-- Sections -->
    <?php include('./pages/HomePage/homePage.php'); ?>
    <?php include('./pages/HomePage/TechPage/techPage.php'); ?>
    <?php include('./pages/HomePage/SportsPage/sportsPage.php'); ?>

</body>
</html>