<?php
$pageTitle = $pageTitle ?? 'Online O & A Level Courses | Study Smarter with Orb-Ed';
$pageDescription = $pageDescription ?? "Boost your O & A Level studies with Orb-Ed's comprehensive lectures, course bundles and exam tips. Your path to academic success starts here!";
$showPreloader = $showPreloader ?? false;
$currentScript = basename($_SERVER['SCRIPT_NAME']);
$pageCanonical = $pageCanonical ?? ('https://orb-ed.pk/' . ($currentScript === 'index.php' ? '' : $currentScript));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="image" content="https://orb-ed.pk/assets/images/orbed-logo.png">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical); ?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
<meta property="og:image" content="https://orb-ed.pk/assets/images/orbed-logo.png" />
<meta property="og:url" content="<?php echo htmlspecialchars($pageCanonical); ?>" />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Orb-Ed",
  "url": "https://orb-ed.pk/",
  "logo": "https://orb-ed.pk/assets/images/orbed-logo.png",
  "sameAs": []
}
</script>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <!-- font awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- slick slider -->

  <!-- animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  
  <!-- owl carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-276GQ41JRN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-276GQ41JRN');
</script>
</head>


<body>


  <main>

    <?php if ($showPreloader): ?>
    <div class="res-container">
      <div class="res-row">
        <div id="block-1 b3">
          <div id="loader-wrap">
            <div id="loading">
              <div id="loading-center">
                <div id="loading-center-absolute">
                  <div class="header-logo">
                    <i class="fa-beat">    <img src="assets/images/orbed-logo.png" alt=""></i>
                  </div>
                  <div id="object"></div>
                  <div id="loader"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="res-container">
      <div class="res-row">
        <div id="block-1">
          <div id="block-2"></div>
        </div>
      </div>
    </div>
    <?php endif; ?>


    <div class="main-body ">


      <div class="livechat">
        <a href="https://api.whatsapp.com/send?phone=923306723344">
          <p><i class="fa-regular fa-comments fa-beat-fade"></i>Ask your counsellor</p>
        </a>
      </div>


      <header>
        <div class="container-1500">
          <div class="mob-munu">
            <a class="toggle-menu" href="#">
              <i></i>
              <i></i>
              <i></i>
            </a>
            <div class="menu-drawer">
              <div class="destop-menus">

                <div class="logo-header">
                  <img src="assets/images/orbed-logo.png" alt="">
                </div>

                <ul>
                  <li class="active1"><a href="index.php">Home</a></li>
                  <li class="active2" ><a href="aboutus.php">About Us</a></li>
                  <li class="active3"><a href="courses.php">Courses</a></li>
                  <li class="active4"><a href="blogs.php">Blogs</a></li>
                  <li class="active5"><a href="contact.php">Contact us</a></li>
                  <li class="active6"><a href="studyabroad.php">Study Abroad</a></li>
                  <li><a href="https://lms.orb-ed.pk/account/login"><i class="fa-regular fa-circle-user fa-beat"></i>LOG IN</a></li>
                  <li ><a href="https://lms.orb-ed.pk/account/register">TRY IT FREE<i class="fa-solid fa-arrow-right fa-fade"></i></a></li>
                </ul>

              </div>
            </div>

          </div>




          <div class="destop-menus">

            <div class="logo-header">
              <img src="assets/images/orbed-logo.png" alt="">
            </div>
        

            <ul>
            <li class="active1"><a href="index.php">Home</a></li>
                  <li class="active2" ><a href="aboutus.php">About Us</a></li>
                  <li class="active3"><a href="courses.php">Courses</a></li>
                  <li class="active4"><a href="blogs.php">Blogs</a></li>
                  <li class="active5"><a href="contact.php">Contact us</a></li>
                  <li class="active6"><a href="studyabroad.php">Study Abroad</a></li>
                  <li><a href="https://lms.orb-ed.pk/account/login"><i class="fa-regular fa-circle-user fa-beat"></i>LOG IN</a></li>
                  <li ><a href="https://lms.orb-ed.pk/account/register">TRY IT FREE<i class="fa-solid fa-arrow-right fa-fade"></i></a></li>
            </ul>
          </div>

        </div>

      </header>