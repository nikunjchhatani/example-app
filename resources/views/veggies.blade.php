<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin: 0 20px;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .product {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .product img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Vegetable Store</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="product">
            <img src="vegetable1.jpg" alt="Vegetable 1">
            <h2>Tomatoes</h2>
            <p>Price: $1.99/kg</p>
            <button>Add to Cart</button>
        </div>

        <div class="product">
            <img src="vegetable2.jpg" alt="Vegetable 2">
            <h2>Carrots</h2>
            <p>Price: $0.99/kg</p>
            <button>Add to Cart</button>
        </div>

        <!-- Add more products as needed -->

    </div>
</body>
</html>

