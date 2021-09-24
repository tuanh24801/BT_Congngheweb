<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" 
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact</title>
</head>
<body>
    <div class="wrapper">
        <!-- start heaeder  -->
        <div class="header_logo">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid ">
                        <img src="./Image/logo.png" alt="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse menulist" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto p-3 ">
                                <li class="nav-item headerlist">
                                    <a class="nav-link" href="./index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./Categories.php">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./Food.php">Foods</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- start confirm order -->
        <div class="Confirm_oder">
            <div class="container-fluid">
                <section class="food-search">
                    <div class="container_confirmorder">
                        <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
                        <form action="#" class="order">
                            <fieldset>
                                <legend>Selected Food</legend>
                                <div class="food-menu-img">
                                    <img src="Image/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                </div>
                                <div class="food-menu-desc">
                                    <h3>Food Title</h3>
                                    <p class="food-price">$2.3</p>
                                    <div class="order-label">Quantity</div>
                                    <input type="number" name="qty" class="input-responsive" value="1" required>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Delivery Details</legend>
                                <div class="order-label">Full Name</div>
                                <input type="text" name="full-name" placeholder="...." class="input-responsive" required>

                                <div class="order-label">Phone Number</div>
                                <input type="tel" name="contact" placeholder="...." class="input-responsive" required>

                                <div class="order-label">Email</div>
                                <input type="email" name="email" placeholder="....." class="input-responsive" required>

                                <div class="order-label">Address</div>
                                <textarea name="address" rows="10" placeholder="..." class="input-responsive" required></textarea>

                                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        <!-- start bottom -->
        <div class="bottom">
            <div class="logo_information">
                   <ul>
                       <a href="#"><li><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></li></a>
                       <a href="#"><li><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/></li></a>
                       <a href="#"><li><img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/></li></a>
                   </ul>
            </div>
            <div class="Text_information">
                    <p>All right reserved. Designed By <a href="#"> CSE TLU</a></p>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>