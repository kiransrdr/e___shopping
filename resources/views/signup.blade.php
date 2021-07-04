<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!--FavIcon-->
    <link rel="shortcut icon" href="images/Favicon/favicon1.ico" type="image/x-icon">

    <!--Bootstrap Link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Font Awesome Link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Mate+SC&family=Vollkorn:ital@1&display=swap" rel="stylesheet">

    <!--CSS Link-->
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body data-title="signUp">
<nav>
        <div class="logo"> EShopping Center</div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="about"> About us</a></li>
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
<div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <form action="user" method="POST" name="userForm" class="myForm text-center" id="form" autocomplete="off">
                        @csrf
                            <header>Create New Account</header>
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input data-toggle="tooltip" data-placement="bottom" title="UserName must have Atleast 6 Characters" type="text" name="userName" class="myInput" id="userName" placeholder="Username" required onkeyup="validate(this)">
                                <i class="fas fa-check-circle a"></i>
                                <i class="fas fa-exclamation-circle a"></i>
                                <div class="invalid-feedback">
                                    Please Fill out this field
                                </div>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" id="email" placeholder="abc@gmail.com" class="myInput" required onkeyup="validate(this)">
                                <i class="fas fa-check-circle a"></i>
                                <i class="fas fa-exclamation-circle a"></i>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input data-toggle="tooltip" data-placement="bottom" title="Password must be of 8 Digits and Must contain atleast one Capital Letter, 1 Small Letter and 1 Number" type="password" name="password" id="password" placeholder="******" class="myInput" required onkeyup="validate(this)">
                                <i class="fas fa-check-circle a"></i>
                                <i class="fas fa-exclamation-circle a"></i>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    <input type="checkbox" id="check_1" name="check_1" required><small> I read and Agree to <a href="https://www.termsandconditionsgenerator.com/live.php?token=fdcDdXub7oo7i8wGv4pQDO70NazbyyGt">Terms and Conditions</a></small>
                                    <div class="invalid-feedback">You must Check the Box</div>
                                </label>
                            </div>
                            <input type="submit" value="Create Account" class="butt" id = "frmSubmit" onclick="createPost()">
                            <p style="font-family: 'Vollkorn', serif;" class="mt-2">Already have an Account? <a href="login">Login here</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn" style="background-color: maroon;">
                        <div class="box">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function createPost() 
        {
            var name = $('#userName').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var id = $('#post_id').val();

            let _url = `/signup`;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: _url,
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    email: email,
                    password: password,
                    _token: _token
                },
                success: function(response) {
                    if(response.code == 200) {
                        
                    }
                },
                error: function(response) {
                    
                }
            });
        }
    </script> 
</body>
</html>