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

</div>
</body>

</html>