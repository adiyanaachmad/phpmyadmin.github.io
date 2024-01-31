<?php
    session_start();

    include("assets/php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adiyanaachmad</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/images/user-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/color-1.css">
    <link rel="stylesheet" href="assets/css/scroll-to-top-btn.css">
    <link rel="stylesheet" href="assets/css/bottom- navigation-bar.css">
    <link rel="stylesheet" href="assets/css/time and date widget.css">
    <link rel="stylesheet" href="assets/css/time based greeting.css">

    <!-- STLE SWITCHER -->
    <link rel="stylesheet" href="assets/css/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="assets/css/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="assets/css/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="assets/css/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="assets/css/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="assets/css/color-6.css" class="alternate-style" title="color-6" disabled>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#nav__menu">
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-4 fixed-top bg-body" id="nav__menu">
        <div class="container">
            <a class="navbar-brand" href="#"><h4 class="fw-bold">Adiyana Achmad</h4></a> 

            <nav class="nav Container mx-auto">
                <div class="nav__menu">
                    <div class="nav__list">
                        <a href="#home" class="nav__link active">
                            <svg class="indicator" width="94" height="56" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="47" cy="28" rx="24" ry="28"/>
                                <path d="M24 20C24 20 28 55.9999 48 56L0 55.9997C18 55.9998 24 20 24 20Z"/>
                                <path d="M70 20C70 20 66 55.9999 46 56L94 55.9997C76 55.9998 70 20 70 20Z"/>
                            </svg>
                            <i class="bx bx-home-alt nav__icon"></i>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="#services" class="nav__link">
                            <svg class="indicator" width="94" height="56" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="47" cy="28" rx="24" ry="28"/>
                                <path d="M24 20C24 20 28 55.9999 48 56L0 55.9997C18 55.9998 24 20 24 20Z"/>
                                <path d="M70 20C70 20 66 55.9999 46 56L94 55.9997C76 55.9998 70 20 70 20Z"/>
                            </svg>
                            <i class="bx bx-wrench nav__icon"></i>
                            <span class="nav__name">Services</span>
                            
                        </a>
                        <a href="#activity" class="nav__link">
                            <svg class="indicator" width="94" height="56" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="47" cy="28" rx="24" ry="28"/>
                                <path d="M24 20C24 20 28 55.9999 48 56L0 55.9997C18 55.9998 24 20 24 20Z"/>
                                <path d="M70 20C70 20 66 55.9999 46 56L94 55.9997C76 55.9998 70 20 70 20Z"/>
                            </svg>
                            <i class="bx bx-briefcase-alt nav__icon"></i>
                            <span class="nav__name">Activity</span>
                        </a>
                        <a href="#skill" class="nav__link">
                            <svg class="indicator" width="94" height="56" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="47" cy="28" rx="24" ry="28"/>
                                <path d="M24 20C24 20 28 55.9999 48 56L0 55.9997C18 55.9998 24 20 24 20Z"/>
                                <path d="M70 20C70 20 66 55.9999 46 56L94 55.9997C76 55.9998 70 20 70 20Z"/>
                            </svg>
                            <i class="bx bx-book-alt nav__icon"></i>
                            <span class="nav__name">Skills</span>
                        </a>
                        <a href="#contact" class="nav__link">
                            <svg class="indicator" width="94" height="56" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="47" cy="28" rx="24" ry="28"/>
                                <path d="M24 20C24 20 28 55.9999 48 56L0 55.9997C18 55.9998 24 20 24 20Z"/>
                                <path d="M70 20C70 20 66 55.9999 46 56L94 55.9997C76 55.9998 70 20 70 20Z"/>
                            </svg>
                            <i class="bx bx-message-square-detail nav__icon"></i>
                            <span class="nav__name">Contact</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- <div class="init">
                <img src="assets/images/—Pngtree—yellow 2024 new year sign_8620038.png" alt="">
            </div> -->
            <div class="setting shadow">
                <div class="setting">
                     <i class="bi bi-moon-stars-fill mini" id="theme-button"></i>
                </div>
            </div>
            <div class="setting shadow">
                <div class="style-switcher-toggler setting">
                    <i class="bi bi-gear-fill mini"></i>
                </div>
            </div>
        </div>    
    </nav>

    <!-- EVENT -->
    <section id="home">
        <div class="section-padding divider">
            <div class="container">
                <div class="karya1 d-flex align-items-center"> 
                    <main>
                        <div class="main-box top">
                            <div class="top">
                                <div class="box">
                                <?php
                                    $id = $_SESSION['id'];
                                    $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

                                    while($result = mysqli_fetch_assoc($query)){
                                        $res_Uname = $result['Username'];
                                        $res_id = $result['Id'];
                                    }
                                    echo "<h1 style='dark-theme:color:white;'>Hello <b>$res_Uname</b>, Welcome</h1>";
                                ?>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>  

                <div class="swiper karya-swiper p-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- <h3><span>Paris <small>France</small></span></h3> -->
                            <div class="slider-image">
                                <img src="assets/images/8b8bc9a7cef7cdbabc5d5005a8969fd5.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <h3><span>Paris <small>France</small></span></h3> -->
                            <div class="slider-image">
                                <img src="assets/images/png_20240127_142004_0000.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <h3><span>Paris <small>France</small></span></h3> -->
                            <div class="slider-image">
                                <img src="assets/images/png_20240127_142353_0000.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <h3><span>Paris <small>France</small></span></h3> -->
                            <div class="slider-image">
                                <img src="assets/images/20240127_142708_0000.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- <h3><span>Paris <small>France</small></span></h3> -->
                            <div class="slider-image">
                                <img src="assets/images/20240127_143534_0000.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <!--<div class="news-container">-->
                <!--    <div class="news-heading">News</div>-->

                <!--    <div class="news">-->
                <!--        <a href="#" class="news-single active10">-->
                <!--        UJI COBA PHPMSQL.-->
                <!--        </a>-->

                <!--        <a href="#" class="news-single">-->
                <!--        Facebook under fire for handling of user data.-->
                <!--        </a>-->

                <!--        <a href="#" class="news-single">-->
                <!--        Tesla unveils new electric car model with longer range.-->
                <!--        </a>-->

                <!--        <a href="#" class="news-single">-->
                <!--        Google introduces new artificial intelligence tools for businesses.-->
                <!--        </a>-->

                <!--        <a href="#" class="news-single">-->
                <!--        Amazon announces plans to expand its drone delivery program.-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>   
        </div>
    </section>

    <!-- HERO -->
    <section id="home" class="bg-snow">
        <div class="snow-wrap">
            <div class="section-padding divider">
                <div class="container">
                    <div class="row gy-4 align-items-center">
                        <div class="col-lg-5">
                            <img src="assets/images/6d55fc59edbf8b810febbb6f651c59e7.jpg" class="img-fluid rounded-5" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="fw-bold display-4">I AM A CREATIVE<br/> <span class="text-info1"></span></h1>
                            <p class="asd">Selamat datang di ruang virtual yang mencerminkan dedikasi saya dalam dunia kreativitas! Saya dengan antusias mempersembahkan situs ini sebagai wadah untuk menggambarkan seni kreativitas saya. Saya harap anda menemukan inspirasi dan wawasan yang berharga selama menjelajahi situs ini. Selamat Menjelajah!!</p>
                            <a href="#s" class="btn btn-outline-info me-3">My Work</a>
                            <a href="#b" class="btn btn-info">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <div class="karya section-padding divider">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro-section text-center mb-4">
                            <h1 class="fw-bold">My Services</h1>
                            <!-- <p class="mx-auto">Berikut ini saya akan menyajikan layanan yang berfokus pada memberikan solusi kreatif dan inovatif</p> -->
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service border-hover p-4 shadow rounded-5">
                            <div class="icon rounded-5"><i class="ri-pencil-ruler-2-fill"></i></div>
                            <h5 class="mt-4 fw-bold">UI/UX Design</h5>
                            <p class="mb-0 asd">Saya akan lebih berfokus pada penciptaan interaksi yang mulus dan intuitif antara pengalaman pengguna secara keseluruhan dan produk digital, menciptakan elemen visual dan tata letak yang menarik secara visual dan konsisten.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service border-hover p-4 shadow rounded-5">
                            <div class="icon rounded-5"><i class="ri-layout-masonry-fill"></i></div>
                            <h5 class="mt-4 fw-bold">Web Design</h5>
                            <p class="mb-0 asd">Saya akan melakukan pengaturan elemen visual untuk memastikan penelusuran yang lancar bagi pengguna, mempertimbangkan faktor-faktor tata letak, skema warna, tipografi, dan citra untuk menciptakan desain yang menarik secara visual dan koheren.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service border-hover p-4 shadow rounded-5">
                            <div class="icon rounded-5"><i class="ri-landscape-fill"></i></div>
                            <h5 class="mt-4 fw-bold">Visual Design</h5>
                            <p class="mb-0 asd">Saya akan lebih berfokus pada estetika dan elemen suatu produk atau bagian komunikasi untuk menciptakan desain yang kohesif dan menarik secara visual, menciptakan presentasi visual yang harmonis dan menarik untuk meningkatkan pengalaman pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ACTIVITY -->
    <section id="activity">
        <div class="section-padding divider" id="s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro-section text-center mb-4">
                            <h1 class="fw-bold">My Work</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border-hover shadow rounded-5">
                            <img src="assets/images/WEB2.png" class="img-fluid rounded-5" alt="">
                            <span class="badge mt-4">UI Design</span>
                            <a href="#" class="d-block mt-2 fw-bold"><h5 class="fw-bold">Project Heading</h5></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border-hover shadow rounded-5">
                            <img src="assets/images/WEB2.png" class="img-fluid rounded-5" alt="">
                            <span class="badge mt-4">UI Design</span>
                            <a href="#" class="d-block mt-2 fw-bold"><h5 class="fw-bold">Project Heading</h5></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border-hover shadow rounded-5">
                            <img src="assets/images/WEB2.png" class="img-fluid rounded-5" alt="">
                            <span class="badge mt-4">UI Design</span>
                            <a href="#" class="d-block mt-2 fw-bold"><h5 class="fw-bold">Project Heading</h5></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border-hover shadow rounded-5">
                            <img src="assets/images/WEB2.png" class="img-fluid rounded-5" alt="">
                            <span class="badge mt-4">UI Design</span>
                            <a href="#" class="d-block mt-2 fw-bold"><h5 class="fw-bold">Project Heading</h5></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border-hover shadow rounded-5">
                            <img src="assets/images/WEB2.png" class="img-fluid rounded-5" alt="">
                            <span class="badge mt-4">UI Design</span>
                            <a href="#" class="d-block mt-2 fw-bold"><h5 class="fw-bold">Project Heading</h5></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-4 border-hover shadow rounded-5">
                            <img src="assets/images/WEB2.png" class="img-fluid rounded-5" alt="">
                            <span class="badge mt-4">UI Design</span>
                            <a href="#" class="d-block mt-2 fw-bold"><h5 class="fw-bold">Project Heading</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- SKILL -->
    <section id="skill">
        <div class="section-padding divider" id="g">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro-section text-center mb-5">
                            <h1 class="fw-bold">My Skill</h1>
                        </div>
                    </div>
                </div>
                <div class="row g-md-5 g-4">
                    <div class="col-md-6">
                        <div class="row gy-4">
                            <div class="col-12">
                                <div>
                                    <h5 class="small">HTML</h5>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 40%">40%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <h5 class="small">CSS</h5>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 40%">40%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <h5 class="small">JAVASCRIPT</h5>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%">10%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="col-md-6">
                        <div class="row gy-4">
                            <div class="col-12">
                                <div>
                                    <h5 class="small">Bootstrap</h5>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%">10%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <h5 class="small">Slide Swiper</h5>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%">10%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <h5 class="small">Codepen</h5>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 10%">10%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </section>

    <!-- C0NTACT ME -->
    <section id="contact">
        <div class="section-padding" id="b">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro-section text-center mb-5">
                            <h1 class="fw-bold">Contact Me</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form action="#" class="row g-3">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="Email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" placeholder="Enter Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="" class="form-control" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-outline-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-5 bg-info text-white">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-3">
                <div class="col-md-6">
                    <p class="mb-0"><i class="ri-copyright-fill"></i> 2024, Adiyana Achmad</p>
                </div>
                <div class="col-auto text-end d-flex mb-3">
                    <a href="#" class="btn btn-outline-info ms-2 btn-icon nav-link"><i class="ri-github-fill"></i></a>
                    <a href="#" class="btn btn-outline-info ms-2 btn-icon nav-link"><i class="ri-bootstrap-fill"></i></a>
                    <a href="#" class="btn btn-outline-info ms-2 btn-icon nav-link"><i class="ri-codepen-fill"></i></a>
                    <a href="#" class="btn btn-outline-info ms-2 btn-icon nav-link"><i class="ri-instagram-fill"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="scrollToTop-btn">
        <i class="bx bx-up-arrow-alt"></i>
    </div>

    <div class="style-switcher shadow">
        <div class="asdf">
            <p class="asdf-text">Theme Colors</p>
        </div>
        <div class="colors">
            <span class="color-1 bTn activE" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2 bTn" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3 bTn" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4 bTn" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5 bTn" onclick="setActiveStyle('color-5')"></span>
            <span class="color-6 bTn" onclick="setActiveStyle('color-6')"></span>
        </div>
        <div class="right-links">
        <?php
            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_id = $result['Id'];
            }
        echo "<a href='edit.php?Id=$res_id' style='dark-theme:color:white;'>Change Profile</a>";
        ?>
            <a href="php1/logout.php"><button class="btn-login">Log Out</button></a>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="assets/js/switcher.js"></script>
    <script src="assets/js/time and date.js"></script>
    <script src="assets/js/time based greeting.js"></script>
    <script src="assets/js/news ticker.js"></script>
    <script src="assets/js/scrool to top.js"></script>


    <script>
        var typed = new Typed('.text-info1', {
            strings: ['WEB DESIGN', 'VISUAL DESIGN', 'UI/UX DESIGN', 'GRAPHIC DESIGN'],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
        })
        
        var swiper = new Swiper(".karya-swiper", {
            loop: true,
            slidesPerView: 'auto',
            spaceBetween: 33,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
    </script>

</body>
</html>