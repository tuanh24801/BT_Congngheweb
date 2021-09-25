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
    <title>Home</title>
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
        <!-- start search for foods -->
        <div class="Searchfood_Home">
            <div class="container">
                <nav class="navbar">
                    <div class="container Searchfood_input_Home">
                        <form class="d-flex input_Searchfoods_Home">
                            <input class="form-control me-2" type="search" placeholder="Search for food ..." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <!-- start explore foods -->
        <div class="Body_Home">
            <div class="container">
                <div class="row title_body_Home">
                    <h2><b>Explore Foods</b></h2>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 menu_body_home_container">
                    <div class="col menu_body_home">
                        <div class="card h-100">
                            <img src="./Image/pizza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title_menu_body_home">Pizza</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="./Image/burger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title_menu_body_home">Burger</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                        <img src="./Image//momo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title_menu_body_home">Momo</h5>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start food menu -->
        <div class="Food_menu_home">
            <div class="container">
                <div class="row title_Food_menu_home">
                    <h2><b>Food Menu</b></h2>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <div class="col">
                        <div class="card rect_food_menu_home ">
                            <div class="d_flex_Food_menu_home">
                                <div class="div_img_food_menu_home">
                                    <img src="./Image/menu-momo.jpg" class="card-img-top img_Food_menu_home" alt="...">
                                </div>
                                <div class="title_menu">
                                    <h2>Dumplings Specials</h2>
                                    <h2>$5.00</h2>
                                    <p>Made with italian Sauce. Chicken, and organice vegetables</p>
                                    <p class="ordernow"><a href="./Order.php">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rect_food_menu_home ">
                            <div class="d_flex_Food_menu_home">
                                <div class="div_img_food_menu_home">
                                    <img src="./Image/menu-burger.jpg" class="card-img-top img_Food_menu_home" alt="...">
                                </div>
                                <div class="title_menu">
                                    <h2>Best Burger</h2>
                                    <h2>$4.00</h2>
                                    <p>Made with italian Sauce. Chicken, and organice vegetables</p>
                                    <p class="ordernow"><a href="./Order.php">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rect_food_menu_home ">
                            <div class="d_flex_Food_menu_home">
                                <div class="div_img_food_menu_home">
                                    <img src="./Image/menu-momo.jpg" class="card-img-top img_Food_menu_home" alt="...">
                                </div>
                                <div class="title_menu">
                                    <h2>Sadeko Momo</h2>
                                    <h2>$6.00</h2>
                                    <p>Made with italian Sauce. Chicken, and organice vegetables</p>
                                    <p class="ordernow"><a href="./Order.php">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rect_food_menu_home ">
                            <div class="d_flex_Food_menu_home">
                                <div class="div_img_food_menu_home">
                                    <img src="./Image/menu-pizza.jpg" class="card-img-top img_Food_menu_home" alt="...">
                                </div>
                                <div class="title_menu">
                                    <h2>Mixed Pizza</h2>
                                    <h2>$10.00</h2>
                                    <p>Made with italian Sauce. Chicken, and organice vegetables</p>
                                    <p class="ordernow"><a href="./Order.php">Order now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start bottom -->
        <div class="bottom">
                <a href="#"><p class="abcs">See All Foods</p></a>
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