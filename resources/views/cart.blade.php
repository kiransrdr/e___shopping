<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <div class="logo"> EShopping Center</div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html"> About us</a></li>
            <li>
                <label for="btn-1" class="show"> Men +</label>
                <a href=""> Men</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li> <a href=""> Sweaters </a></li>
                    <li><a href=""> Jeans </a></li>
                    <li><a href=""> Pants </a></li>
                </ul>
            </li>

            <li>
                <label for="btn-2" class="show">Women +</label>
                <a href="">Women</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li> <a href=""> Tops </a></li>
                    <li><a href=""> Jackets </a></li>
                    <li><a href=""> Jeans </a></li>
                </ul>
            </li>
            <li><a href="newlogin.html"> Login </a></li>
            <li><a href="signup.html"> Signup </a></li>
            <li class="cart1"><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>

            <li class="cart2"><a href="cart.html"> Cart </a></li>
        </ul>
    </nav>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/redshirt.jpg" alt="">
                        <div>
                            <p>Read T shirt</p>
                            <small>Price: Rs1000</small> <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td> Rs1000</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/blueshirt.jpg">
                        <div>
                            <p>Blue t shirt</p>
                            <small>Price: Rs1000</small> <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td> Rs1000</td>
            </tr>
        </table>


        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rs2000 </td>
                </tr>
                <tr>
                    <td> Tax </td>
                    <td> Rs100 </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rs2100</td>
                </tr>

                <tr>
                    <td> <button type="submit" class="checkout"> Checkout </button> </td>
                </tr>
            </table>

        </div>

    </div>

    <footer class="bg-dark py-2 mt-3" style="border-top: 2px solid red;">
        <div class="container">
            <div class="row text-white">

                <div class="col-sm-4 col-6">
                    <h4>Useful Links</h4>
                    <p><a href="">Privacy Policy</a></p>
                    <p><a href="">Terms of Use</a></p>
                    <p><a href="">Return Policy</a></p>
                    <p><a href="">Discounts Coupons</a></p>
                </div>
                <div class="col-sm-4 col-6">
                    <h4>E-Shopping</h4>
                    <p><a href="">About us</a></p>
                    <p><a href="">Contact Us</a></p>
                    <p><a href="">Career</a></p>
                    <p><a href="">Affiliate</a></p>
                </div>
                <div class="col-sm-4 col-6">
                    <h4>Follow us</h4>
                    <p><a href=""><i class="fa fa-facebook-official"></i> Facebook </a></p>
                    <p><a href=""><i class="fa fa-youtube-play"></i> YouTube</a></p>
                    <p><a href=""><i class="fa fa-linkedin"></i> LinkedIn</a></p>
                    <p><a href=""><i class="fa fa-twitter"></i> Twitter</a></p>
                </div>
            </div>


            <p class="copyright text-white text-center"> All Rights Reserved Copyrights 2020<i class="fa fa-heart"></i> by E-Shopping</p>
        </div>
        </div>

        
    </footer>

</body>

</html>