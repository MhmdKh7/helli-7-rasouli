<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="main-container">

    <header class="header">
        <div class="container">
            <nav class="main-nav">
                <div class="logo">
                    <img src="logo.png" alt="logo">
                </div>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <div class="icon">
                    <img src="Search.png" alt="">
                    <img src="Cart.png" alt="">
                    <img src="user.png" alt="">
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="deal-tag">
                        <span class="deal-dot"></span>
                        <span>Hot Deal In This Week</span>
                    </div>
                    <h1>Sony Wireless Headphone</h1>
                    <a href="#" class="shop-btn">
                        <img src="Cart.png" alt="cart-icon">
                        Shop Now
                    </a>
                </div>
                <div class="hero-image">
                    <img src="headphone.png" alt="Sony Wireless Headphone">
                </div>
            </div>
        </div>
    </section>

    <section class="category-section">
        <div class="container">
            <div class="category-header">
                <div class="category-title">
                    <div class="deal-tag">
                        <span class="deal-dot"></span>
                        <span>Categories</span>
                    </div>
                    <h2>Browse by Category</h2>
                </div>
            </div>
            <div class="category-list">
                <?php
                $categories = [
                    ["name" => "Computers", "image" => "computers.png"],
                    ["name" => "Accessories", "image" => "accessories.png"],
                    ["name" => "Laptops", "image" => "laptops.png"],
                    ["name" => "Phones", "image" => "phones.png"],
                    ["name" => "Networking", "image" => "networking.png"],
                    ["name" => "PC Gaming", "image" => "pc-gaming.png"],
                ];
                foreach ($categories as $category) {
                    echo '<div class="category-item">';
                    echo '<img src="' . $category['image'] . '" alt="' . $category['name'] . '">';
                    echo '<p>' . $category['name'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <div class="promo-div">
        <section class="promo-section">
            <div class="container">
                <div class="promo-content">
                    <div class="promo-text">
                        <div class="deal-tag">
                            <span class="deal-dot"></span>
                            <span>Don't Miss!!</span>
                        </div>
                        <h2>Enhance Your Music Experience</h2>
                        <a href="#" class="shop-btn">Check It Out!</a>
                    </div>
                    <div class="promo-image">
                        <img src="promo-headphone.png" alt="Headphone">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="products-section">
        <div class="container">
            <div class="products-header">
                <div class="products-title">
                    <div class="deal-tag">
                        <span class="deal-dot"></span>
                        <span>Our Products</span>
                    </div>
                    <h2>Explore Our Products</h2>
                </div>
            </div>
            <div class="products-list">
                <?php
                $products = [
                    ["name" => "Gaming Headphones", "price" => "$400", "image" => "headphoneee.png"],
                    ["name" => "Wireless Controller", "price" => "$29.89", "image" => "controller1.png"],
                    ["name" => "Gaming Keyboard", "price" => "$32.99", "image" => "keyboard.png"],
                    ["name" => "StreamCam", "price" => "$199", "image" => "webcam.png"],
                    ["name" => "Microphones", "price" => "$387", "image" => "speakers.png"],
                    ["name" => "Speakers", "price" => "$233", "image" => "speaker.png"],
                    ["name" => "Gaming Mouse", "price" => "$100", "image" => "mouse.png"],
                    ["name" => "VR Headsets", "price" => "$29.89", "image" => "controller2.png"],
                ];
                foreach ($products as $product) {
                    echo '<div class="product-item">';
                    echo '<div class="image-container">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '</div>';
                    echo '<h3>' . $product['name'] . '</h3>';
                    echo '<p class="price">' . $product['price'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="most-sold-section">
        <div class="container">
            <div class="most-sold-header">
                <h2>Most Sold in Store</h2>
            </div>
            <div class="most-sold-list">
                <?php
                $most_sold_products = [
                    ["name" => "Gaming Headphones", "price" => "$400", "image" => "headphoneee.png"],
                    ["name" => "Wireless Controller", "price" => "$29.89", "image" => "controller1.png"],
                    ["name" => "Gaming Keyboard", "price" => "$32.99", "image" => "keyboard.png"],
                    ["name" => "StreamCam", "price" => "$199", "image" => "webcam.png"],
                    ["name" => "Microphones", "price" => "$387", "image" => "speakers.png"],
                    ["name" => "Speakers", "price" => "$233", "image" => "speaker.png"],
                    ["name" => "Gaming Mouse", "price" => "$100", "image" => "mouse.png"],
                    ["name" => "VR Headsets", "price" => "$29.89", "image" => "controller2.png"],
                ];
                foreach ($most_sold_products as $product) {
                    echo '<div class="most-sold-item">';
                    echo '<div class="image-container">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '</div>';
                    echo '<div class="most-sold-content">';
                    echo '<h3>' . $product['name'] . '</h3>';
                    echo '<p class="price">' . $product['price'] . '</p>';
                    echo '<div class="actions">';
                    echo '<button class="favorite-btn">♥</button>';
                    echo '<button class="buy-btn">Buy Product</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

</div>
</body>

</html>