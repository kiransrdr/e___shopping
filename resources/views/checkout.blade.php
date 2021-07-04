<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Checkout </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sidepages.css') }}">
    <style>

    </style>
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
    <div class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted title">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3 sticky-top">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0 sidebar">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0 sidebar">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0 sidebar">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong class="sidebar">$20</strong>
                        </li>
                    </ul>

                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3 title">Billing address</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control input-text" id="firstName" name="FirstName" placeholder="" value="" required onkeyup="validate(this)">
                                <small></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control input-text" name="LastName" id="lastName" placeholder="" value="" required onkeyup="validate(this)">
                                <small></small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Username</label>

                            <input type="text" class="form-control input-text" id="username" name = "username" placeholder="Username" required onkeyup="validate(this)">
                            <small></small>

                        </div>
                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control input-text" id="email" name="email" placeholder="you@example.com" onkeyup="validate(this)">
                            <small></small>
                            <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control input-text" id="address" placeholder="1234 Main St">
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control input-text" id="address2" placeholder="Apartment or suite">
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback"> Please select a valid country. </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State</label>
                                <select class="custom-select d-block w-100" id="state" required="">
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback"> Please provide a valid state. </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control input-text" id="zip" name="zip" placeholder="" required="" onkeyup="validate(this)">
                                <small></small>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">Payment</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control input-text" id="cc-name" name="name" placeholder="" required="" onkeyup="validate(this)">
                                <small class="text-muted">Full name as displayed on card</small>
                                <small></small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control input-text" id="cc-number" name="credit" placeholder="" required="" onkeyup="validate(this)">
                                <small></small>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block submit" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

            </div>

            <p class="copyright text-white text-center"> All Rights Reserved Copyrights 2020<i class="fa fa-heart-o"></i> by E-Shopping</p>
        </div>
        </div>
        <script type="text/javascript" src="validate.js"></script>

    </footer>

</body>

</html>