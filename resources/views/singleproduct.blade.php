<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
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

    <div class="container cont-descript">
        <div class="descript">
            <div> <img src="images/feature0.jpg" width="350" height="550">
            </div>
            <div class="content">
                <h1 class="cont"> Shirt </h1>
                <h4 class="cont"> Rs5000</h4>
                <select class="cont">
                            <option value=""> select size</option>
                            <option value="">XXL</option>
                            <option value=""> XL </option>
                            <option value=""> Large </option>
                            <option value=""> Medium</option>
                            <option value=""> Small </option>
                    </select>
                <input class="cont" type="number" value="1"> <br>
                <button class="addtocart cont"> Add to Cart</button>
                <h3 class="cont"> Product details </h3>
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum, nulla quis semper porttitor, mi turpis varius leo, et feugiat justo nunc porttitor quam. Curabitur venenatis efficitur facilisis. Nulla sapien est, dictum et sapien
                    at, luctus efficitur est. Suspendisse potenti. In eget dolor sed felis tristique blandit.</p>
            </div>
        </div>
    </div>

    <section class="collection">
        <div class="container py-5">
            <h3 class="text-center title">You may also like</h3>
            <div class="row py-5">
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature1.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>Product Name</h5>
                        <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature2.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>Product Name</h5>
                        <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature3.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>Product Name</h5>
                        <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature4.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>Product Name</h5>
                        <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

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