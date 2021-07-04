<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sidepages.css') }}">
    <title>Login</title>
    <style>
        .card {
            overflow: hidden;
            border: 0 !important;
            border-radius: 20px !important;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }
        
        .img-left {
            width: 45%;
            background: url('images/login.jpg') center;
            background-size: cover;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .title {
            margin-bottom: 2rem;
        }
        
        .form-input {
            position: relative;
        }
        
        .form-input input {
            width: 100%;
            height: 45px;
            padding-left: 40px;
            margin-bottom: 20px;
            box-sizing: border-box;
            box-shadow: none;
            border: 1px solid #00000020;
            border-radius: 50px;
            outline: none;
            background: transparent;
        }
        
        .form-input span {
            position: absolute;
            top: 10px;
            padding-left: 15px;
            color: maroon;
        }
        
        .form-input input::placeholder {
            color: black;
            padding-left: 0px;
        }
        
        .form-input input:focus,
        .form-input input:valid {
            border: 2px solid maroon;
        }
        
        .form-input input:focus::placeholder {
            color: #454b69;
        }
        
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color:maroon !important;
            border: 0px;
        }
        
        .form-box button[type="submit"] {
            margin-top: 10px;
            border: none;
            cursor: pointer;
            border-radius: 50px;
            background: maroon;
            color: #fff;
            font-size: 90%;
            font-weight: bold;
            letter-spacing: .1rem;
            transition: 0.5s;
            padding: 12px;
        }
        
        .form-box button[type="submit"]:hover {
            background: maroon;
        }
        
        .forget-link,
        .register-link {
            color: maroon;
            font-weight: bold;
        }
        
        .forget-link:hover,
        .register-link:hover {
            color: grey;
            text-decoration: none;
        }
        
        .form-box .btn-social {
            color: white !important;
            border: 0;
            font-weight: bold;
        }
        
        .form-box .btn-facebook {
            background: maroon;
        }
        
        .form-box .btn-google {
            background: #da3f34;
        }
        
        .form-box .btn-twitter {
            background: #33ccff;
        }
        
        .form-box .btn-facebook:hover {
            background: #3d578f;
        }
        
        .form-box .btn-google:hover {
            background: #bf3b31;
        }
        
        .form-box .btn-twitter:hover {
            background: #2eb7e5;
        }

        .form-input{
            position: relative;
        }
        .form-input i.a{
            position: absolute;
            top: 15px;
            left: 320px;
            visibility: hidden;
        }
        .valid i.fa-check-circle{
            visibility: visible;
            color: #2ecc71;
        }
        .invalid i.fa-exclamation-circle{
            visibility: visible;
            color: #e74c3c;
        }
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
    <div class="container mt-3">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>

                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        Login into account
                    </h4>
                    <form class="form-box px-3"  method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email Address" tabindex="10" required onkeyup="validate1(this)">
                            <i class="fa fa-check-circle a"></i>
                            <i class="fa fa-exclamation-circle a"></i>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" name="" placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                                <label class="custom-control-label" for="cb1">Remember me</label>
                                <small id="check"></small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-block text-uppercase">
                    Login
                  </button>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                <a href="{{ url('auth/google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                </a>
            </div>

                        <div class="text-right">
                            <a href="#" class="forget-link">
                    Forget Password?
                  </a>
                        </div>

                        <div class="text-center mb-3">
                            or login with
                        </div>

                        <div class="row mb-3">
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-facebook">
                      facebook
                    </a>
                            </div>

                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-google">
                      google
                    </a>
                            </div>

                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-twitter">
                      twitter
                    </a>
                            </div>
                            
                        </div>

                        <hr class="my-4">

                        <div class="text-center mb-2">
                            Don't have an account?
                            <a href="#" class="register-link">
                    Register here
                  </a>
                        </div>
                    </form>
                </div>
            </div>
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

    <script type="text/javascript" src="validate.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
