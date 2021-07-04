<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title> Admin Panel </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sidepages.css') }}">
    <style>
        .cart-info img {
            width: 90px;
            height: 90px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo"> E-Shopping Center</div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href=""> About us</a></li>
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
            <li><a href=""> Login </a></li>
            <li><a href=""> Signup </a></li>
            <li class="cart1"><a href=""><i class="fa fa-shopping-cart"></i></a></li>

            <li class="cart2"><a href=""> Cart </a></li>
        </ul>
    </nav>
    <div class="container mt-3">
        <h1 class="title text-center"> Admin Panel</h1>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">

            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Product Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quantity</th>

                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Product Name</td>
                        <td>
                            <div class="cart-info">
                                <img src="images/feature3.jpg" alt="">
                                <div>
                                    <p>White T shirt</p>
                                    <small>Price: Rs1000</small> <br>

                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td><button class="btn btn-warning">Delete</button></td>
                    </tr>
                    <tr>

                        <td>Product Name</td>
                        <td>
                            <div class="cart-info">
                                <img src="images/watch-3.jpg" alt="">
                                <div>
                                    <p>Blue watch</p>
                                    <small>Price: Rs2000</small> <br>

                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td><button class="btn btn-warning">Delete</button></td>
                    </tr>
                    <tr>

                        <td>Product Name</td>
                        <td>
                            <div class="cart-info">
                                <img src="images/green.jpg" alt="">
                                <div>
                                    <p>Men's Shirt</p>
                                    <small>Price: Rs1000</small> <br>

                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td><button class="btn btn-warning">Delete</button></td>
                    </tr>
                </tbody>
            </table>





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
                    <p><a href=""><i class="fa fa-twitter"></i> Twitter</a></p>
                </div>
                <p class="copyright text-white text-center"> All Rights Reserved Copyrights 2021<i class="fa fa-heart-o"></i> by SP19-BCS-106 and SP19-BS-103</p>
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