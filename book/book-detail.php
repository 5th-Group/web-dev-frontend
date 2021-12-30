<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail</title>
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
    <!-- End Font CDN -->
</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top myNav">
        <div class="container-fluid mx-3">
            <div>
                <a class="navbar-brand scaleUp" href="index.html"><i class="fas fa-book-open"></i></a>
                <a class="navbar-brand scaleUp" href="#"><span>Contact</span></a>
            </div>

            <div class="d-flex">
                <a class="navbar-brand scaleUp" href="admin.html">Admin Page</a>
                <a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avt" src="./images/avt.jpg" alt="" />
                    Lãnh
                </a>
                <a class="navbar-brand scaleUp" href="login.html">Login</a>
                <a class="navbar-brand scaleUp" href="cart.html"><i class="fas fa-shopping-cart"></i> 99</a>
            </div>
        </div>
    </nav>
    <!-- End nav -->

    <!-- Detail Book -->
    <div class="container grid-detail-container">
        <!-- Book Cover -->
        <div class="grid-book-cover text-center rounded shadow">
            <!-- Img -->
            <a href="#"><img class="book-detail-img mt-lg-3" src="./images/10.jpg" alt="" /></a>
            <!-- End Img -->

            <!-- Info -->
            <div class="book-detail-info">
                <div class="
                            infoContainer
                            text-start
                            pt-3
                            px-4
                            text-uppercase
                            d-flex
                            gap-3
                        ">
                    <span class="fw-light heading-title">Published:</span>
                    <span>1232</span>
                </div>
                <div class="text-start pt-2 px-4 text-uppercase d-flex gap-3">
                    <span class="fw-light heading-title">page:</span>
                    <span>402</span>
                </div>
            </div>

            <!-- End Info -->
        </div>
        <!-- End Book Cover -->

        <!-- Book Decs -->
        <div class="
                    text-center
                    grid-book-desc
                    rounded
                    shadow
                    d-flex
                    flex-column
                    gap-3
                ">
            <!-- Heading -->
            <div>
                <div class="heading text-start pt-2 px-4">Time Lapse</div>
                <div class="text-start px-4 d-flex gap-1">
                    <span class="text">By</span><span class="heading-title">Elizabeth Scholes</span>
                </div>
            </div>
            <!-- End Heading -->

            <!-- Overview -->
            <div class="text-start px-4">
                <div class="heading-title-md fw-bold">Overview</div>
                <p class="text">
                    Gripping and surprising, Nemesis is a nail-biting
                    thriller from one of the biggest stars in crime fiction.
                    Grainy closed-circuit television footage shows a man
                    walking into an Oslo bank and putting a gun to a
                    cashier's head. He tells the young woman to count to
                    twenty-five. When the robber doesn't get his money in
                    time, the cashier is executed, and two million Norwegian
                    kroner disappear without a trace. Police Detective Harry
                    Hole is assigned to the case. While Hole's girlfriend is
                    away in Russia, an old flame decides to get in touch.
                    Former girlfriend and struggling artist Anna Bethsen
                    invites Hole to dinner, and he can't resist a visit. But
                    the evening ends in an all too familiar way as Hole
                    awakens with a thundering headache, a missing cell
                    phone, and no memory of the past twelve hours. That same
                    morning, Anna is found shot dead in her bed.
                </p>
            </div>

            <!-- End Overview -->

            <!-- Footer -->
            <div class="addToCart">
                <button class="myButton">
                    <i class="fas fa-shopping-cart icon-sm mx-2"></i>Add To
                    Cart
                </button>
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Book Decs  -->
    </div>
    <!-- End Detail Book -->
    <!-- Bootstrap scipt -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- End Bootstrap scipt -->
</body>

</html>