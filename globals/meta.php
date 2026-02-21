<?php
// ==============================
// Dynamic Meta Configuration
// ==============================

$meta_title = $meta_title ?? "Aarav Jadon Puttanam | Aspiring Software Developer & AI Enthusiast";

$meta_description = $meta_description ?? "Official portfolio of Aarav Jadon Puttanam, an 18-year-old Cambridge Grade 12 student passionate about Artificial Intelligence, business, and practical innovation. Focused on building real-world solutions through disciplined growth and hands-on learning.";

$meta_keywords = $meta_keywords ?? "Aarav Jadon Puttanam, aspiring software developer, AI student, Cambridge Grade 12, artificial intelligence, student portfolio, AI and business, young innovator";

$meta_author = "Aarav Jadon Puttanam";

$meta_image = $meta_image ?? "https://aaravputtnam.com/assets/img/og-image.jpg";

$meta_url = $meta_url ?? "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$meta_robots = $meta_robots ?? "index, follow";
?>

<!-- ==============================
        Basic Meta
================================== -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="<?php echo $meta_robots; ?>">
<meta name="author" content="<?php echo $meta_author; ?>">
<meta name="description" content="<?php echo $meta_description; ?>">
<meta name="keywords" content="<?php echo $meta_keywords; ?>">

<title><?php echo $meta_title; ?></title>

<!-- ==============================
        Canonical
================================== -->
<link rel="canonical" href="<?php echo $meta_url; ?>">

<!-- ==============================
        Open Graph (Facebook / LinkedIn)
================================== -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $meta_title; ?>">
<meta property="og:description" content="<?php echo $meta_description; ?>">
<meta property="og:image" content="<?php echo $meta_image; ?>">
<meta property="og:url" content="<?php echo $meta_url; ?>">
<meta property="og:site_name" content="Aarav Jadon Puttanam">

<!-- ==============================
        Twitter Card
================================== -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $meta_title; ?>">
<meta name="twitter:description" content="<?php echo $meta_description; ?>">
<meta name="twitter:image" content="<?php echo $meta_image; ?>">

<!-- ==============================
        Favicon
================================== -->
<link rel="icon" type="image/png" href="/assets/img/favicon.png">
<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

<!-- ==============================
        Theme Color
================================== -->
<meta name="theme-color" content="#000000">

<!-- ==============================
        Structured Data (Personal Branding Boost)
================================== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Aarav Jadon Puttanam",
  "url": "https://aaravputtnam.com",
  "description": "Aspiring Software Developer and AI Enthusiast passionate about building practical solutions through disciplined growth and hands-on innovation.",
  "jobTitle": "Aspiring Software Developer",
  "knowsAbout": ["Artificial Intelligence", "Business", "Software Development", "Problem Solving"],
  "sameAs": []
}
</script>