<?php
if (!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LMCCM Store</title>
    <!-- <base href="/web-dev-frontend/" /> -->
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- End Bootstrap CDN -->
    <!-- Icon -->
    <link rel="stylesheet" href="./icon/css/all.min.css" />
    <!-- End Icon -->
    <!-- CSS -->

    <link rel="stylesheet" href="./css/style.css" />

    <!-- End CSS -->
    <!-- Font CND -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top myNav">
        <div class="container-fluid mx-3">
            <div>
                <a class="navbar-brand scaleUp" href="#"><i class="fas fa-book-open"></i></a>
                <a class="navbar-brand scaleUp" href="#"><span>Contact</span></a>
            </div>

            <div class="d-flex">
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login']) {
                    if ($_SESSION['user_role'] == "admin") {
                        echo '<a class="navbar-brand scaleUp" href="admin.html">Admin Page</a>';
                    }
                    echo    '<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avt" src="./images/avt.jpg" alt="" />' . $_SESSION['username'] . '</a>
                            <a class="navbar-brand scaleUp" href="cart.html"><i class="fas fa-shopping-cart"></i> 99</a>';
                } else {
                    echo '<a class="navbar-brand scaleUp" href="user/login.php">Login</a>
                          <a class="navbar-brand scaleUp" href="user/register.php">Register</a>';
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- End nav -->

    <!-- Main Show -->
    <div class="grid-container container">
        <!-- Grid Book-Header  -->
        <span class="heading fw-light grid-book-header">Books</span>
        <!-- End Grid Header-->

        <!-- Grid Filter-Header  -->
        <span class="heading fw-light grid-filter-header">Filter Options</span>
        <!-- End Grid Filter-Header-->

        <!-- Grid category -->
        <div class="
                    grid-category
                    category-box
                    d-flex
                    justify-content-start
                    align-items-center
                    title
                    shadow
                ">
            <div class="mx-4 d-flex gap-3 fw-light">
                <button class="Btn-text">Today</button>
                <button class="Btn-text">This Month</button>
                <button class="Btn-text">This Year</button>
            </div>
        </div>
        <!-- End Grid category -->

        <!-- Grid filter -->
        <div class="
                    grid-filter
                    shadow
                    d-flex
                    flex-column
                    justify-content-start
                    align-items-start
                    gap-2
                ">
            <!-- Filter Header -->
            <div class="heading mx-4 mt-2">Genre</div>
            <!-- End Filter Header -->
            <!--  -->
            <div class="mx-4 text">
                <label class="containerBox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                    Adventure
                </label>
            </div>
            <!--  -->
            <div class="mx-4">
                <label class="containerBox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                    Fantasy
                </label>
            </div>
            <!--  -->
            <div class="mx-4">
                <label class="containerBox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                    Art
                </label>
            </div>
            <!--  -->
            <div class="mx-4">
                <label class="containerBox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                    Fiction
                </label>
            </div>
            <!--  -->
            <div class="mx-4">
                <label class="containerBox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                    Games
                </label>
            </div>
            <!--  -->
            <div class="mx-4">
                <label class="containerBox">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                    Sci-fi
                </label>
            </div>
        </div>
        <!-- End Grid Filter -->

        <!-- Grid Showcase -->
        <div class="grid-show">
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/1.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/2.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold position-relative">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/3.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/4.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/5.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/6.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/7.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/8.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/9.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/10.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/11.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
            <!--  -->
            <div class="cover-container flex-column d-flex shadow-sm">
                <a href="detail.html"><img class="book-img mt-lg-3" src="./images/12.jpg" alt="" /></a>

                <span class="mt-lg-4 fw-bold">Pride and Prejudke</span>
                <span class="title textP">Adventure, Sci-fi</span>
            </div>
        </div>
        <!-- End Grid Showcase  -->
    </div>

    <!-- End Main Show -->

    <!-- Bootstrap scipt -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- End Bootstrap scipt -->
</body>

</html>