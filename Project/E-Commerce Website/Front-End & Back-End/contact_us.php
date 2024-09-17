<!DOCTYPE html>
<html>

<head>
    <?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    if ($stmt->execute()) {
        echo "Message sent!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                    <a class="nav-link active" href="contact_us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>


    <div id="div-in-contact">
        <h1>Contact Us</h1>
        <p id="p-in-contact"><a href="home.php">Home</a>/Contact</p>
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
                background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQq-pEkFeh84FXEkMrR0nB1PlSRRLInXzxeD3VY34Ph6finZwQk');

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


    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form method="post" action="contact_us.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                                            required="required" name="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                        required="required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span>Our office</legend>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">
                            P:</abbr>
                        (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </form>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br>


    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.024786937153!2d-73.9654415!3d40.8054491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f63c75af2d65%3A0xfae1d35b0af86e2d!2s2880%20Broadway%20%232880%2C%20New%20York%2C%20NY%2010025%2C%20USA!5e0!3m2!1sen!2seg!4v1722608466568!5m2!1sen!2seg"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

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