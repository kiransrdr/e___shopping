<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title> E-Shopping </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <div class="logo"> E-Shopping Center</div>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/c1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/c2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/c3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/c4.jpg" alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="head1">
        <h1> Shop </h1>
    </div>

    <div class="categ">
        <div class="row">
            <div class="col-sm-12 col-md-4 box card-anim">
                <a href="">
                    <img src="images/women.jpg" alt="" width="350" height="350">
                    <p> Women Collection</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 box card-anim">
                <a href="">
                    <img src="images/men.jpg" alt="" width="350" height="350">
                    <p>Men Collection </p>
                </a>
            </div>

            <div class="col-sm-12 col-md-4 box card-anim">
                <a href="">
                    <img src="images/kids.jpg" alt="" width="350" height="350">
                    <p> kids Collection</p>
                </a>
            </div>
        </div>
    </div>

    <section class="collection">
        <div class="container py-5">
            <h1 class="text-center title"> NEW SUMMER COLLECTION 2021</h1>
            <div class="row py-5">
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature1.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>White Shirt</h5>
                        <p><small><del>Rs 2500</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature2.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>Blue Shirt</h5>
                        <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/feature3.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>White pants</h5>
                        <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-4 col-6">
                    <div class="card card-anim">
                        <img src="images/FEATURE4.jpg" alt="" class="img-fluid mb-3">
                        <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                        <h5>Silk Shirt</h5>
                        <p><small><del>Rs 2500</del><span class="pl-3"> Rs 1500</span></small></p>
                        <button type="button" class="btn btn-p">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" section-feature container-fluid p-0">
        <div class="cover">
            <div class="content text-center">
                <h1 class="title">What makes us Different </h1>
                <p>We offer best service to our customers, and provide discount on regular shopping</p>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect card-anim">
                    <h1>3040</h1>
                    <p>Orders Completed</p>
                </div>
                <div class="rect card-anim">
                    <h1>2400</h1>
                    <p> Good Reviews </p>
                </div>
                <div class="rect card-anim">
                    <h1>2500</h1>
                    <p>Loyal Customers</p>
                </div>
                <div class="rect card-anim">
                    <h1>2600</h1>
                    <p>Product Purchased</p>
                </div>
            </div>
        </div>
    </section>
    <section class="popular mt-4 mb-3">
        <h1 class="title text-center">Our Popular Products</h1>
        <div class="container mt-4 mb-2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="row text-center">
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature1.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature2.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature3.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature4.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>

                        </div>

                    </div>
                    <div class="carousel-item text-center">
                        <div class="row">
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature1.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature2.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature3.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>
                            <div class="col-3 item-h"> <img class="d-block w-100" src="images/feature4.jpg" alt="First slide">
                                <h5>Product Name</h5> <button type="button" class="btn btn-p mt-2">Buy</button>
                            </div>

                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
 

    <section class="testimonials mb-3" style="margin-top: 90px;">
        <div class="container">
            <h1 class="title text-center">Our Golden Reviews</h1>
            <p class="text-center mb-4">Some of Top Reviews from customer</p>
            <div class="row mt-4">
                <div class=" col-12 col-lg-6 col-md-6  text-center card-anim mb-4">
                    <div class="profile">
                        <img src="images/profile1.jpg" alt=""   width="350" height="350"class="user">
                        <blockquote>Had a wonderful experience with E-Shopping. Highly Recommended</blockquote>
                        <h6> Adam
                            </h6>
                    </div>
                </div>
                <div class=" col-12 col-lg-6 col-md-6  text-center card-anim mb-4">
                    <div class="profile">
                        <img src="images/profile2.jpg" alt=""  width="350" height="350"class="user">
                        <blockquote>Cool Shopping Center. Quality products and Highly Recommended</blockquote>
                        <h6>
                            Sarah</h6>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   
    <footer class="bg-dark py-2" style="border-top: 2px solid red;">
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
                <p class="copyright text-white text-center"> All Rights Reserved Copyrights 2020<i class="fa fa-heart-o"></i> by E-Shopping</p>
            </div>


        </div>



        </div>
    </footer>

    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>