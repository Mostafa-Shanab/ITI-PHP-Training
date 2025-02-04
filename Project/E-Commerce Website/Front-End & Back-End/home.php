<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Start Navbar Same All Pages -->
    <p class="text-center">
        <a href="https://themewagon.github.io/ultras/index.html" target="_blank">Real Website</a>
    </p>
    <p  style="padding-right: 55px; text-align: right;">
        <a href="login.php" style="margin-right: 15px;">Login</a>
        <a href="register.php">Sign Up</a>
    </p>
    <nav style="margin-bottom: -20px;">
        <table style="width: 100%;">
            <tr style="font-size: 20px;">
                <td style="padding-right: 55px;">
                    <p>Let's talk! <strong>+57 444 11 00 35</strong></p>
                </td>
                <td>
                    <p>Free shipping on a purchase value of $200</p>
                </td>
                <td style="text-align: right; user-select: none; padding-bottom: 15px;">
                    <i class="fa-regular fa-user"></i>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </td>
            </tr>
        </table>
    </nav>
    <hr>
    <nav class="navbar navbar-expand-lg navbar-light" style="user-select: none;">
        <a class="navbar-brand" href="home.php"><img src="https://themewagon.github.io/ultras/images/main-logo.png"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-size: 20px;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="home.php" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="home.php">Home</a>
                        <a class="dropdown-item" href="#">Home V2 <span style="color: #6995B1;">(PRO)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="category.php" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_blank">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="category.php">Shop</a>
                        <a class="dropdown-item" href="#">Shop Slider <span style="color: #6995B1;">(PRO)</span></a>
                        <a class="dropdown-item" href="#">Shop Grid <span style="color: #6995B1;">(PRO)</span></a>
                        <a class="dropdown-item" href="#">Shop Slider <span style="color: #6995B1;">(PRO)</span></a>
                        <a class="dropdown-item" href="#">Shop Slider <span style="color: #6995B1;">(PRO)</span></a>
                        <a class="dropdown-item" href="#">Cart <span style="color: #6995B1;">(PRO)</span></a>
                        <a class="dropdown-item" href="#">Wishlist <span style="color: #6995B1;">(PRO)</span></a>
                        <a class="dropdown-item" href="#">Checkout <span style="color: #6995B1;">(PRO)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar Same All Pages -->



    <!-- Start Slider -->
    <section class="slider-section" style="user-select: none;">
        <div id="carousel" class="carousel slide" data-ride="carousel">

            <!-- Carousel Content -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"
                    style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSu7NV2PQX7u65r8QemLChyGNvt6hwuKQIzybBRpQ8y91b82cJf');">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Summmer<br>Collection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem totam optio aut incidu.</p>
                    </div>
                </div> <!-- End of Carousel Item -->

                <div class="carousel-item"
                    style="background-image: url('https://www.shutterstock.com/image-photo/dental-dent-health-care-ad-260nw-2264009499.jpg');">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Casual<br>Collection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem totam optio aut incidu.</p>
                    </div>
                </div> <!-- End of Carousel Item -->

            </div> <!-- End of Carousel Content -->

            <!-- Previous & Next -->
            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only"></span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div> <!-- End of Carousel -->
    </section> <!-- End of Slider -->
    <!-- End Slider -->



    <!-- Start Products -->
    <div id="products-div">
        <div id="products-div-div">
            <h1>Featured Products</h1>
            <a href="category.php">View All Products <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/product-item1.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Full sleeve cover shirt</a></h3>
                        <div class="price">$40.00
                            <span>$114.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/product-item2.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Volunteer Half Blue</a></h3>
                        <div class="price">$38.00
                            <span>$112.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/product-item3.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Double Yellow Shirt</a></h3>
                        <div class="price">$44.00
                            <span>$114.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/product-item4.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Long Belly Grey Pant</a></h3>
                        <div class="price">$33.00
                            <span>$114.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products -->



    <!-- <div style="width: 95%; margin: auto;">
        <div class="row">
            <div class="col-md-6">
                <img src='https://themewagon.github.io/ultras/images/collection-item1.jpg' />
            </div>
            <div class="col-md-6">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi aliquam itaque nobis iste, alias id
                corrupti fugit illo. Harum mollitia atque consequatur fugit amet qui adipisci id optio excepturi
                voluptates.
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                CONTENT
            </div>
            <div class="col-md-6">
                <img src='https://themewagon.github.io/ultras/images/collection-item2.jpg' />
            </div>
        </div>
    </div> -->


    <!-- start 3 Images -->
    <div style="width: 95%; margin: 155px auto;">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-4">
                <div id="first-image">
                    <img src="https://themewagon.github.io/ultras/images/collection-item1.jpg" class="card-img"
                        alt="Street Wear">
                    <div class="card-img-overlay">
                        <h5 class="card-text">CASUAL COLLECTION</h5>
                        <h1 class="card-text">Street<br>Wear.</h1>
                        <h5 class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa
                            diam
                            elementum.</h5>
                        <a href="category.php"><strong>Shop Collection</strong> <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-4">
                <div id="second-image" class="card mb-3">
                    <img src="https://themewagon.github.io/ultras/images/collection-item2.jpg"
                        class="card-img rounded-lg" alt="Basic Shoes">
                    <div class="card-img-overlay">
                        <h5 class="card-title">BASIC COLLECTION</h5>
                        <h1 class="card-text">Basic<br>Shoes.</h1>
                        <a href="category.php"><strong>Shop Collection</strong> <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div id="third-image" class="card">
                    <img src="https://themewagon.github.io/ultras/images/collection-item3.jpg"
                        class="card-img rounded-lg" alt="Woolen Hat">
                    <div class="card-img-overlay">
                        <h5 class="card-title">BEST SELLING PRODUCT</h5>
                        <h1 class="card-text">Woolen<br>Hat.</h1>
                        <a href="category.php"><strong>Shop Collection</strong> <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end 3 Images -->



    <div id="div-discount">
        <h1>Get 25% off Discount Coupons</h1>
        <br>
        <p style="color: #8D8D8D;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit
            massa posuere maecenas. At
            tellus ut
            nunc amet vel <br>egestas.</p>
        <br>
        <input placeholder="Enter Your email address here"><button>SUBSCRIBE NOW</button>
    </div>




    <!-- start products section 2 -->
    <div id="products-2">
        <h1>Best selling products</h1>
        <br>
        <!-- start nav links -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Tshirts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Pants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Hoodie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Outer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Jackets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Accessories</a>
                    </li>
                </ul>
            </div>
            <script>
                var activeNavItem = $('.nav-item');

                activeNavItem.click(function () {
                    activeNavItem.removeClass('active');
                    $(this).addClass('active');
                });
            </script>
        </nav>
        <!-- end nav links -->
        <br>
        <!-- start products-2 first_row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products1.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Half Sleeve T-Shirt</a></h3>
                        <div class="price">$40.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products2.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Stylish Grey T-Shirt</a></h3>
                        <div class="price">$35.00
                            <!-- <span>$112.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products3.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Silk White Shirt</a></h3>
                        <div class="price">$35.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products4.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Grunge Hoodie</a></h3>
                        <div class="price">$30.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end products-2 first_row -->



        <!-- start products-2 second_row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products5.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Half Sleeve T-Shirt</a></h3>
                        <div class="price">$40.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products6.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Stylish Grey T-Shirt</a></h3>
                        <div class="price">$35.00
                            <!-- <span>$112.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products7.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Silk White Shirt</a></h3>
                        <div class="price">$35.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products8.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Grunge Hoodie</a></h3>
                        <div class="price">$30.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end products-2 second_row -->



        <!-- start products-2 third_row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products13.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Half Sleeve T-Shirt</a></h3>
                        <div class="price">$40.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products14.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Stylish Grey T-Shirt</a></h3>
                        <div class="price">$35.00
                            <!-- <span>$112.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products15.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Silk White Shirt</a></h3>
                        <div class="price">$35.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products16.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Grunge Hoodie</a></h3>
                        <div class="price">$30.00
                            <!-- <span>$114.00</span> -->
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end products-2 third_row -->
    </div>
    <!-- end products section 2 -->






    <!-- start of quote -->
    <div id="quotes-slider">
        <div class="slideshow-container">

            <div class="mySlides">
                <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                <p class="author">- John Keats</p>
            </div>

            <div class="mySlides">
                <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
                <p class="author">- Ernest Hemingway</p>
            </div>

            <div class="mySlides">
                <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                <p class="author">- Thomas A. Edison</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </div>
    <!-- end of quote -->





    <!-- start flash sales -->
    <div id="flash-sales">
        <h1>Flash sales</h1>
        <br><br><br>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products10.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Long Sleeve T-Shirt</a></h3>
                        <div class="price">$40.00
                            <span>$50.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products11.jpg">
                        </a>
                    </div>
                    <div class=" product-content text-left">
                        <h3 class="title"><a href="#">Grey Check Coat</a></h3>
                        <div class="price">$45.00
                            <span>$55.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products12.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Silk White Shirt</a></h3>
                        <div class="price">$35.00
                            <span>$45.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="https://themewagon.github.io/ultras/images/selling-products8.jpg">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#">Blue Jeans Pants</a></h3>
                        <div class="price">$35.00
                            <span>$45.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end flash sales -->



    <!-- start bk-girl -->
    <div style="width: 95%; margin: 155px auto;">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb-4">
                <div id="first-image">
                    <img src="https://themewagon.github.io/ultras/images/model.jpg" class="card-img" alt="Street Wear"
                        height="650px">
                    <div class="card-img-overlay" style=" padding: 55px 195px 55px 300px;">
                        <h5 class="card-text">DENIM COLLECTION</h5>
                        <br>
                        <h1 class="card-text">The Casual Selection.</h1>
                        <br>
                        <h5 class="card-text">Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt
                            ut vitae elit risus. Tempor egestas
                            condimentum et ac rutrum dui, odio.</h5>
                        <br>
                        <a href="category.php"><strong>Shop Collection</strong> <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end bk-girl -->




    <!-- start quotes section 2 -->
    <div id="quotes-section-2">
        <h1>Quote of the day</h1>
        <br>
        <p>"It's true, I don't like the whole cutoff-shorts-and-T-shirt look, but I think you can look fantastic in
            casual clothes."</p>
        <br>
        <p>- Dr. Seuss</p>
    </div>
    <hr><br><br><br><br><br>
    <!-- end quotes section 2 -->



    <!-- start journal -->
    <div id="journal">
        <div id="products-div-div" style="margin-bottom: 100px;">
            <h1>Our Journal</h1>
            <a href="category.php">Read All Articles <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>

        <div id="images-text-under">
            <div class="col-lg-3 col-md-6 col-xs-12" style="margin-right: 100px;">
                <img src="https://themewagon.github.io/ultras/images/post-img1.jpg" alt="">

                <div class="d-flex">
                    <div style="margin-right: 0 !important;">
                        <div style="font-size: 55px; color: #6995B1;" style="margin-right: 0 !important;">22</div>
                        <div style="font-size: 20px; color: #8D8D8D;" style="margin-right: 0 !important;">Aug-2021</div>
                    </div>
                    <div>
                        <br>
                        <a href="">top 10 casual look ideas to dress up your kids</a>
                        <br>
                        <a href="" style="font-size: 20px; color: #8D8D8D;">Fashion</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12" style="margin-right: 100px;">
                <img src="https://themewagon.github.io/ultras/images/post-img2.jpg" alt="">

                <div class="d-flex">
                    <div style="margin-right: 0 !important;">
                        <div style="font-size: 55px; color: #6995B1;" style="margin-right: 0 !important;">25</div>
                        <div style="font-size: 20px; color: #8D8D8D;" style="margin-right: 0 !important;">Aug-2021</div>
                    </div>
                    <div>
                        <br>
                        <a href="">Latest trends of wearing street wears supremely</a>
                        <br>
                        <a href="" style="font-size: 20px; color: #8D8D8D;">Trending</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <img src="https://themewagon.github.io/ultras/images/post-img3.jpg" alt="">

                <div class="d-flex">
                    <div style="margin-right: 0 !important;">
                        <div style="font-size: 55px; color: #6995B1;" style="margin-right: 0 !important;">28</div>
                        <div style="font-size: 20px; color: #8D8D8D;" style="margin-right: 0 !important;">Aug-2021</div>
                    </div>
                    <div>
                        <br>
                        <a href="">types of comfortable clothes ideas for women</a>
                        <br>
                        <a href="" style="font-size: 20px; color: #8D8D8D;">Inspiration</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <section id="blog_area" class="pt-5">
                <div id="masonry">

                    <div class="card">
                        <div class="card__img">
                            <a href="#">
                                <img class="img-fluid" src="https://themewagon.github.io/ultras/images/post-img1.jpg"
                                    alt="Image 1">
                            </a>
                            <div class="card__date">
                                <span>Jan. 1st 19</span>
                            </div>
                        </div>
                        <div class="card__content">
                            <h4 class="card__title">
                                Card 1 Title
                            </h4>
                            <p class="card__content-jcenter">
                                Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse
                                iam
                                conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi
                            </p>
                            <span>
                                <a href="#">Read more</a>
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <a href="#">
                                <img class="img-fluid" src="https://picsum.photos/501/250/?random" alt="Image 1">
                            </a>
                            <div class="card__date">
                                <span>Jan. 1st 19</span>
                            </div>
                        </div>
                        <div class="card__content">
                            <h4 class="card__title">
                                Card 2 Title
                            </h4>
                            <p class="card__content-jcenter">
                                Soleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis
                                nostrorum
                                imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum
                                regum res
                                gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate
                                regionum nec
                                celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero
                                disiunctissimas
                                terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed
                                victoriis
                                lustratae sunt.
                            </p>
                            <span>
                                <a href="#">Read more</a>
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <a href="#">
                                <img class="img-fluid" src="https://picsum.photos/505/225/?random" alt="Image 1">
                            </a>
                            <div class="card__date">
                                <span>Jan. 1st 19</span>
                            </div>
                        </div>
                        <div class="card__content">
                            <h4 class="card__title">
                                Card 3 Title
                            </h4>
                            <p class="card__content-jcenter">
                                Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra
                                modum, quam
                                Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam
                                mortalis,
                                inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui
                                paulatim
                                eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos
                                conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes,
                                adfectati regni
                                vel artium nefandarum calumnias insontibus adfligebant.
                            </p>
                            <span>
                                <a href="#">Read more</a>
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <a href="#">
                                <img class="img-fluid" src="https://picsum.photos/500/230/?random" alt="Image 1">
                            </a>
                            <div class="card__date">
                                <span>Jan. 1st 19</span>
                            </div>
                        </div>
                        <div class="card__content">
                            <h4 class="card__title">
                                Card 4 Title
                            </h4>
                            <p class="card__content-jcenter">
                                Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum
                                mariti inops
                                cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas
                                florem
                                adultae virginis diuturnum absentia pauperis erubesceret patris.
                            </p>
                            <span>
                                <a href="#">Read more</a>
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <a href="#">
                                <img class="img-fluid" src="https://picsum.photos/600/300/?random" alt="Image 1">
                            </a>
                            <div class="card__date">
                                <span>Jan. 1st 19</span>
                            </div>
                        </div>
                        <div class="card__content">
                            <h4 class="card__title">
                                Card 5 Title
                            </h4>
                            <p class="card__content-jcenter">
                                Saepissime igitur mihi de amicitia cogitanti maxime illud considerandum videri solet,
                                utrum
                                propter imbecillitatem atque inopiam desiderata sit amicitia, ut dandis recipiendisque
                                meritis
                                quod quisque minus per se ipse posset, id acciperet ab alio vicissimque redderet, an
                                esset hoc
                                quidem proprium amicitiae, sed antiquior et pulchrior et magis a natura ipsa profecta
                                alia
                                causa. Amor enim, ex quo amicitia nominata est, princeps est ad benevolentiam
                                coniungendam. Nam
                                utilitates quidem etiam ab iis percipiuntur saepe qui simulatione amicitiae coluntur et
                                observantur temporis causa, in amicitia autem nihil fictum est, nihil simulatum et,
                                quidquid
                                est, id est verum et voluntarium.
                            </p>
                            <span>
                                <a href="#">Read more</a>
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__img">
                            <a href="#">
                                <img class="img-fluid" src="https://picsum.photos/600/400/?random" alt="Image 1">
                            </a>
                            <div class="card__date">
                                <span>Jan. 1st 19</span>
                            </div>
                        </div>
                        <div class="card__content">
                            <h4 class="card__title">
                                Card 6 Title
                            </h4>
                            <p class="card__content-jcenter">
                                Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus
                                servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum
                                parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo
                                cuncta
                                vastarat. erat autem quod cogitabat huius modi.
                            </p>
                            <span>
                                <a href="#">Read more</a>
                            </span>
                        </div>
                    </div>

                </div>
            </section>
        </div> -->

    </div>
    <!-- end journal -->

    <!-- start logos -->
    <div id="all-logos">
        <div><img src="https://themewagon.github.io/ultras/images/brand1.png" height="35px" width="250px"></div>
        <div><img src="https://themewagon.github.io/ultras/images/brand2.png"></div>
        <div><img src="https://themewagon.github.io/ultras/images/brand3.png"></div>
        <div><img src="https://themewagon.github.io/ultras/images/brand4.png"></div>
        <div style="margin-right: 55px;"><img src="https://themewagon.github.io/ultras/images/brand5.png"></div>
    </div>
    <!-- end logos -->


    <!-- start follow our workers -->
    <div id="follow-our-workers">
        <h1>Follow our instagram</h1>
        <p>Our official Instagram account <a href="">@ultras</a> or <a href="">#ultras_clothing</a></p>

        <section>
            <div class="row gallery">
                <div class="col-lg-2 col-md-6 col-xs-12 thumb">
                    <a href="https://picsum.photos/940/650?random=1">
                        <figure><img class="img-fluid img-thumbnail"
                                src="https://themewagon.github.io/ultras/images/insta-image1.jpg" alt="Random Image">
                        </figure>
                    </a>
                </div>

                <div class="col-lg-2 col-md-6 col-xs-12 thumb">
                    <a href="https://picsum.photos/940/650?random=1">
                        <figure><img class="img-fluid img-thumbnail"
                                src="https://themewagon.github.io/ultras/images/insta-image2.jpg" alt="Random Image">
                        </figure>
                    </a>
                </div>

                <div class="col-lg-2 col-md-6 col-xs-12 thumb">
                    <a href="https://picsum.photos/940/650?random=1">
                        <figure><img class="img-fluid img-thumbnail"
                                src="https://themewagon.github.io/ultras/images/insta-image3.jpg" alt="Random Image">
                        </figure>
                    </a>
                </div>

                <div class="col-lg-2 col-md-6 col-xs-12 thumb">
                    <a href="https://picsum.photos/940/650?random=1">
                        <figure><img class="img-fluid img-thumbnail"
                                src="https://themewagon.github.io/ultras/images/insta-image4.jpg" alt="Random Image">
                        </figure>
                    </a>
                </div>

                <div class="col-lg-2 col-md-6 col-xs-12 thumb">
                    <a href="https://picsum.photos/940/650?random=1">
                        <figure><img class="img-fluid img-thumbnail"
                                src="https://themewagon.github.io/ultras/images/insta-image5.jpg" alt="Random Image">
                        </figure>
                    </a>
                </div>

                <div class="col-lg-2 col-md-6 col-xs-12 thumb">
                    <a href="https://picsum.photos/940/650?random=1">
                        <figure><img class="img-fluid img-thumbnail"
                                src="https://themewagon.github.io/ultras/images/insta-image6.jpg" alt="Random Image">
                        </figure>
                    </a>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $(".gallery").magnificPopup({
                        delegate: "a",
                        type: "image",
                        tLoading: "Loading image #%curr%...",
                        mainClass: "mfp-img-mobile",
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                        },
                        image: {
                            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                        }
                    });
                });
            </script>
        </section>

    </div>
    <!-- end follow our workers -->

    <!-- start shipping-information -->
    <hr>
    <div id="shipping-information">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-3 col-sm-6">
                <div>
                    <i class="fa-solid fa-truck"></i>
                    <h4>
                        <strong>Free shipping</strong> Over $200
                    </h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div>
                    <i class="fa-solid fa-rotate-left"></i>
                    <h4>
                        <strong>Money back</strong> Return within 7 days
                    </h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div>
                    <i class="fa-solid fa-tags"></i>
                    <h4>
                        <strong>Buy 4 get 5th</strong> 50% off
                    </h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div>
                    <i class="fa-solid fa-question"></i>
                    <h4>
                        <strong>Any questions?</strong> experts are ready
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- end shipping-information -->


    <!-- start footer -->
    <footer id="last-footer" class="footer_area section_padding_130_0">
        <div class="container">
            <div class="row">
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Footer Logo-->
                        <div class="footer-logo mb-3"></div>
                        <p>Appland is completely creative, lightweight, clean app landing page.</p>
                        <!-- Copywrite Text-->
                        <div class="copywrite-text mb-5">
                            <p class="mb-0">Made with <i class="lni-heart mr-1"></i>by<a class="ml-1"
                                    href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a></p>
                        </div>
                        <!-- Footer Social Area-->
                        <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Facebook"><i class="fa-brands fa-facebook"></i></a><a href="#"
                                data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i
                                    class="fa-brands fa-pinterest"></i></a><a href="#" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Skype"><i
                                    class="fa-brands fa-skype"></i></a><a href="#" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Twitter"><i
                                    class="fa-brands fa-twitter"></i></a></div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">About</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Corporate Sale</a></li>
                                <li><a href="#">Terms &amp; Policy</a></li>
                                <li><a href="#">Community</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">Support</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Term &amp; Conditions</a></li>
                                <li><a href="#">Help &amp; Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Widget Title-->
                        <h5 class="widget-title">Contact</h5>
                        <!-- Footer Menu-->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Call Centre</a></li>
                                <li><a href="#">Email Us</a></li>
                                <li><a href="#">Term &amp; Conditions</a></li>
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

</body>

</html>