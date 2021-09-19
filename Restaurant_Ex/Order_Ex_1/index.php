<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-inner">
                <div class="logo">
                    <a href="#"><img src="./Image/logo.png" alt=""></a>
                </div>
                <div class="menu">
                    <ul>
                        <a href="../Home_Ex"><li>Home</li></a>
                        <a href="../Categories_Ex"><li>Categories</li></a>
                        <a href="../Food_Ex"><li>Foods</li></a>
                        <a href="../Order_Ex_1"><li>Contact</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <section class="food-search">
            <div class="container">
            
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
                    <input type="text" name="full-name" placeholder="E.g. Vijay Thapa" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
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
    
</body>
</html>