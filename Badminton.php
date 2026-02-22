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
document.addEventListener("DOMContentLoaded", function () {

  const videos = document.querySelectorAll(
    ".badminton-strip--videos .badminton-strip-card video"
  );

  const modal = document.getElementById("videoModal");
  const modalVideo = document.getElementById("modalVideo");
  const closeBtn = document.getElementById("videoClose");

  videos.forEach(video => {

    const card = video.closest(".badminton-strip-card");

    /* ------------------------
       HOVER PREVIEW
    ------------------------ */
    card.addEventListener("mouseenter", async () => {
      try {
        await video.play();
      } catch (err) {}
    });

    card.addEventListener("mouseleave", () => {
      video.pause();
      video.currentTime = 0;
    });

    /* ------------------------
       CLICK → OPEN MODAL
    ------------------------ */
    card.addEventListener("click", () => {

      const src = video.getAttribute("src");

      modalVideo.src = src;
      modal.classList.add("is-active");

      modalVideo.play();

    });

  });

  /* ------------------------
     CLOSE MODAL
  ------------------------ */
  function closeModal(){
    modal.classList.remove("is-active");
    modalVideo.pause();
    modalVideo.currentTime = 0;
    modalVideo.src = "";
  }

  closeBtn.addEventListener("click", closeModal);

  modal.addEventListener("click", (e) => {
    if(e.target === modal){
      closeModal();
    }
  });

});
</script>
  

</head>
<body>

    <?php include('./globals/header.php'); ?>
     <?php include('./pages/Sports/Batminton/Batminton.php'); ?>

  
  <!-- =========================
     VIDEO MODAL
========================== -->
<div class="badminton-video-modal" id="videoModal">
  <div class="badminton-video-overlay"></div>

  <div class="badminton-video-modal-content">
    <button class="badminton-video-close" id="videoClose">&times;</button>
    <video id="modalVideo" controls playsinline></video>
  </div>
</div>


</body>
</html>