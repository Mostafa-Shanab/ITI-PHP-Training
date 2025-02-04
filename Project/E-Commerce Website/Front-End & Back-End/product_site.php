<!DOCTYPE html>
<html lang="en">

<head>

    <?php
include 'db.php';

$product_id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Site</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #D83344;
            --text-color: #333333;
            --background-color: #f5f5f7;
            --card-background: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            padding: 20px;
            margin: 0;
        }

        .cont {
            max-width: 400px;
            margin: 2rem auto;
        }

        .product-card {
            background-color: var(--card-background);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .product-card__image {
            overflow: hidden;
        }

        .product-card__image img {
            width: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-card__image img {
            transform: scale(1.05);
        }

        .product-card__info {
            padding: 20px;
        }

        .product-card__title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .product-card__description {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 20px;
        }

        .product-card__price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-card__price {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .product-card__btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .product-card__btn:hover {
            background-color: #C71729;
        }

        @media (max-width: 480px) {
            .cont {
                max-width: 100%;
                padding: 0 20px;
            }

            .product-card__title {
                font-size: 1.3rem;
            }

            .product-card__description {
                font-size: 0.8rem;
            }

            .product-card__price {
                font-size: 1.1rem;
            }

            .product-card__btn {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
        }

        a {
            font-size: 35px;
            color: #8d8d8d;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <a href="category.php">Back To Category</a>
    <div class="cont">
        <div class="product-card">
            <div class="product-card__image">
                <img src="<?php echo $product['img']; ?>"
                    alt="error">
            </div>
            <div class="product-card__info">
                <h1><?php echo $product['name']; ?></h1>
                <h2 class="product-card__title"><?php echo $product['name']; ?></h2>
                <p class="product-card__description"><?php echo $product['description']; ?></p>
                <div class="product-card__price-row">
                    <span class="product-card__price">$<?php echo $product['price']; ?></span>
                    <button class="product-card__btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>