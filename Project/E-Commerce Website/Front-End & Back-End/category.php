<!DOCTYPE html>
<html>

<head>

    <?php
include 'db.php'; // Include the database connection

// Fetch all categories
$categories_stmt = $conn->prepare("SELECT * FROM categories");
$categories_stmt->execute();
$categories_result = $categories_stmt->get_result();

// Check if a category ID is provided in the URL
if (isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Prepare and execute the query to fetch products from the specified category
    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = ?");
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If no category ID is provided, set products_result to NULL
    $result = NULL;
}
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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
    <p class="text-center">
        <a href="https://themewagon.github.io/ultras/index.html" target="_blank">Real Website</a>
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
                    <a class="nav-link dropdown-toggle" href="home.php" id="navbarDropdownMenuLink"
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
                    <a class="nav-link dropdown-toggle active" href="category.php" id="navbarDropdownMenuLink"
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


    <div id="div-in-contact">
        <h1>Shop Page</h1>
        <p id="p-in-contact"><a href="home.php">Home</a>/Shop</p>
        <style>
            #div-in-contact {
                margin-bottom: 150px;

                h1 {
                    font-size: 200px;
                }

                padding-top: 100px;
                height: 500px;
                width: 100%;
                background-size: cover;
                background-position: center;
                text-align: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ8JNIA-7GXY-C0sDLZGkE2nedJAbDX9VLYB_nY3UkTZdHWS9uH');

                #p-in-contact {
                    color: #8d8d8d;

                    a {
                        color: black;
                    }

                    a:hover {
                        color: #8d8d8d !important;
                    }
                }
            }
        </style>
    </div>


    <aside class="col-md-3" style="float: right;" id="category-site">
        <style>
            #category-site {
                margin: 15px;

                a {
                    color: #8d8d8d;
                }

                input {
                    padding: 15px 25px;
                }

                button {
                    padding: 15px;
                }
            }
        </style>
        <div class="sidebar">
            <div class="widgets widget-menu">
                <div class="widget-search-bar">
                    <form role="search" method="get" class="d-flex">
                        <input class="search-field" placeholder="Search" type="text">
                        <button class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="widgets widget-product-tags">
                <h5 class="widget-title">Tags</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                    <li class="tags-item">
                        <a href="">White</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Cheap</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Branded</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Modern</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Simple</a>
                    </li>
                </ul>
            </div>
            <div class="widgets widget-product-brands">
                <h5 class="widget-title">Brands</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                    <li class="tags-item">
                        <a href="">Nike</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Adidas</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Puma</a>
                    </li>
                    <li class="tags-item">
                        <a href="">Spike</a>
                    </li>
                </ul>
            </div>
            <div class="widgets widget-price-filter">
                <h5 class="widget-title">Filter By Price</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                    <li class="tags-item">
                        <a href="">Less than $10</a>
                    </li>
                    <li class="tags-item">
                        <a href="">$10- $20</a>
                    </li>
                    <li class="tags-item">
                        <a href="">$20- $30</a>
                    </li>
                    <li class="tags-item">
                        <a href="">$30- $40</a>
                    </li>
                    <li class="tags-item">
                        <a href="">$40- $50</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>


    <!-- start products section 2 -->
    <div id="products-2" style="margin-top: -100px;">
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
                    <?php while ($category = $categories_result->fetch_assoc()): ?>
	                
                    <li class="nav-item">
                        <a class="nav-link" href="category.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                    </li>
                    
                    <?php endwhile; ?>
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
            <?php if ($result && $result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
	<a href="product.php?id=<?php echo $row['id']; ?>" class="category-item">
	</a>
    
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="product_site.php?id=<?php echo $row['id']; ?>">
                            <img class="pic-1" src="<?php echo $row['img']; ?>">
                        </a>
                    </div>
                    <div class="product-content text-left">
                        <h3 class="title"><a href="#"><?php echo $row['name']; ?></a></h3>
                        <div class="price">$<?php echo $row['price']; ?>
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

            <?php endwhile; ?>
            <?php else: ?>
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
            <?php endif; ?>
        </div>
        <!-- end products-2 first_row -->
    </div>
    <!-- end products section 2 -->
                    



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