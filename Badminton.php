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
    <link rel="stylesheet" href="./globals/headerInsidePage.css">

    <!-- Section CSS -->
    <link rel="stylesheet" href="./pages/HomePage/HomePage.css">
    <link rel="stylesheet" href="./pages/Sports/Batminton/Batminton.css">

    <script>
  // Hover Play for Videos Strip
  const stripVideos = document.querySelectorAll(".badminton-strip--videos .badminton-strip-card video");

  stripVideos.forEach((v) => {
    const card = v.closest(".badminton-strip-card");

    card.addEventListener("mouseenter", async () => {
      try { await v.play(); } catch (e) {}
    });

    card.addEventListener("mouseleave", () => {
      v.pause();
      v.currentTime = 0;
    });
  });
</script>

  

</head>
<body>

    <?php include('./globals/header.php'); ?>
     <?php include('./pages/Sports/Batminton/Batminton.php'); ?>

  

</body>
</html>