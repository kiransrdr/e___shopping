<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Products </title>
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
    <div></div>
    <div></div>
    <main class="main-product">
        <section class="shirt">

            <div class="container">
                <h1 class="title text-center mb-4 mt-4 grad-head">Men's Best Shirt Collection</h1>
                <div class="row ">
                    <div class="col-8">
                        <img src="images/mainshirt.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-2">
                        <button class="button  btn-rounded btn-p">Add to Cart</button>
                        <button class="button  btn-rounded btn-p mt-1">Purchase</button>
                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 500</span></small></p>
                        <h5 class></h5>

                    </div>
                </div>


            </div>
            <section class="popular mt-4 mb-3 similar">
                <h3 class="title text-center grad-head">Similar Brand Shirts</h3>
                <div class="container mt-4 mb-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <div class="row text-center">
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarcshirt-1.jpg" alt="First slide">
                                        <h5>Product Name</h5>

                                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 500</span></small></p>
                                        <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-2.jpg" alt="First slide">
                                        <h5>Product Name</h5>

                                        <p><small><del>Rs 950</del><span class="pl-3"> Rs 700</span></small></p><button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-3.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 700</del><span class="pl-3"> Rs 500</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-4.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 800</del><span class="pl-3"> Rs 400</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>

                                </div>

                            </div>
                            <div class="carousel-item text-center">
                                <div class="row">
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-5.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 850</del><span class="pl-3"> Rs 700</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-6.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 750</del><span class="pl-3"> Rs 500</span></small></p><button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-7.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 600</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarshirt-8.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 800</del><span class="pl-3"> Rs 400</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
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
        </section>


        <section class="collection">
            <div class="container py-5">
                <h1 class="text-center title grad-head">Other categories 4 Star Shirts</h1>
                <div class="row py-5">
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/oth1.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/oth2.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/oth3.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/oth4.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/oth5.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/othershirt-6.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/othershirt-7.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/othershirt-8.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                </div>


        </section>
        <!--------------------Jeans and other pants Section Start---------------------------->
        <section class="pant">

            <div class="container">
                <h1 class="title text-center mb-4 mt-4 grad-head">Best Jeans Collection</h1>
                <div class="row ">
                    <div class="col-6 offset-2">
                        <img src="images/simj1.jpg" alt="" class="img-fluid" width="200">
                    </div>
                    <div class="col-2">
                        <div class="a">
                            <button class="button  btn-rounded btn-p">Add to Cart</button>
                            <button class="button  btn-rounded btn-p mt-1">Purchase</button>
                            <p><small><del>Rs 900</del><span class="pl-3"> Rs 500</span></small></p>

                        </div>

                    </div>
                </div>


            </div>
            <section class="popular mt-4 mb-3 similar">
                <h3 class="title text-center grad-head">Similar Brand Jeans</h3>
                <div class="container mt-4 mb-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <div class="row text-center">
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/simj2.jpg" alt="First slide">
                                        <h5>Product Name</h5>

                                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 500</span></small></p>
                                        <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/simj3.jpg" alt="First slide">
                                        <h5>Product Name</h5>

                                        <p><small><del>Rs 950</del><span class="pl-3"> Rs 700</span></small></p><button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarjean-3.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 700</del><span class="pl-3"> Rs 500</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarjean-4.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 800</del><span class="pl-3"> Rs 400</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>

                                </div>

                            </div>
                            <div class="carousel-item text-center">
                                <div class="row">
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarjean-5.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 850</del><span class="pl-3"> Rs 700</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarjean-6.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 750</del><span class="pl-3"> Rs 500</span></small></p><button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarjean-7.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 600</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
                                    </div>
                                    <div class="col-3 item-h"> <img class="d-block w-100" src="images/similarjean-8.jpg" alt="First slide">
                                        <h5>Product Name</h5>
                                        <p><small><del>Rs 800</del><span class="pl-3"> Rs 400</span></small></p> <button type="button" class="btn btn-p">Buy</button>
                                        <br>
                                        <button class="button  btn-rounded btn-p mt-1">Add to Cart</button>
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
        </section>
        <section class="collection">
            <div class="container py-5">
                <h1 class="text-center title grad-head">Other categories 4 Star Pants</h1>
                <div class="row py-5">
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op1.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op2.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op3.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op4.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op5.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op6.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/op7.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/otherpant-8.jpg" alt="" class="img-fluid mb-3">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="collection accessories">

            <div class="container py-5">
                <h1 class="title text-center grad-head">Accessories Collection</h1>
                <h3 class="text-center title mt-4 grad-head">Stylish Trending Accessories</h3>
                <div class="row py-5">
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc1.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc2.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc3.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc4.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc5.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc6.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc7.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/acc8.jpg" alt="" class="img-fluid mb-3 rounded-circle" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container py-5">

                <h3 class="text-center title mt-4 grad-head">Stylish Trending Watches</h3>
                <div class="row py-5">
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/watch-1.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/watch-2.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/watch-3.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/watch-4.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------Woemen Section-->
        <section class="women-section">
            <div class="container">
                <h1 class="title text-center mb-4 mt-4 grad-head">Women Best Shirt Collection</h1>
                <div class="row ">
                    <div class="col-8">
                        <img src="images/womenmain.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-2 pt-4">
                        <button class="button  btn-rounded btn-p">Add to Cart</button>
                        <button class="button  btn-rounded btn-p mt-1">Purchase</button>
                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 500</span></small></p>
                        <h5 class></h5>

                    </div>
                </div>
            </div>

            <div class="container py-5">
                <h1 class="title text-center grad-head">Similar Collection</h1>
                <h3 class="text-center title mt-4 grad-head">All 4 Star shirts</h3>
                <div class="row py-5 women-collection">
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/Cut-And-Sew-Faux-Fur-Sweatshirt.png" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/Cut-And-Sew-Faux-Fur-Sweatshirt.png" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/Cut-And-Sew-Faux-Fur-Sweatshirt.png" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/Cut-And-Sew-Faux-Fur-Sweatshirt.png" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/shirtw.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/shirtw.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/shirtw.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/shirtw.jpg" alt="" class="img-fluid mb-3 rounded-circle" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="Kids-section">
            <div class="container">
                <h1 class="title text-center mb-4 mt-4 grad-head">Kids Best Shirt Collection</h1>
                <div class="row ">
                    <div class="col-8">
                        <img src="images/mainnkid.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-2 " style="padding-top: 90px;">
                        <button class="button  btn-rounded btn-p">Add to Cart</button>
                        <button class="button  btn-rounded btn-p mt-1">Purchase</button>
                        <p><small><del>Rs 900</del><span class="pl-3"> Rs 500</span></small></p>
                        <h5 class></h5>

                    </div>
                </div>
            </div>

            <div class="container py-5">
                <h1 class="title text-center grad-head">Similar Collection</h1>
                <h3 class="text-center title mt-4 grad-head">All 4 Star shirts</h3>
                <div class="row py-5 women-collection">
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-1.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-1.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-1.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-1.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-2.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2000</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-2.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 1900</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-2.jpg" alt="" class="img-fluid mb-3" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2200</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-4 col-6">
                        <div class="card card-anim">
                            <img src="images/similarcshirt-2.jpg" alt="" class="img-fluid mb-3 rounded-circle" width="185">
                            <a href="#"><input type="button" value="Add to Cart" class=" text-white rounded-circle"></a>
                            <h5>Product Name</h5>
                            <p><small><del>Rs 2100</del><span class="pl-3"> Rs 1500</span></small></p>
                            <button type="button" class="btn btn-p rounded-circle">Buy</button>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>

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