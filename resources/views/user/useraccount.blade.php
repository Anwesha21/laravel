<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Your Account</title>
    <link rel="stylesheet" href="{{URL('user/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

</head>
<body>




<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="{{URL('user/imagess/logo2.png')}}" alt="logo" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="/" class="activee">Home</a></li>
                <!-- <li><a href="product.php" class="activee ">Products</a></li> -->
                <li><a href="about" class="activee">About</a></li>
                <li><a href="contact" class="activee ">Contact</a></li>
                <li><a href="account" class="activee active">Account</a></li>
            </ul>
        </nav>
        <a href="cart"><img src="{{URL('user/imagess/cart.png')}}" alt="cart" width="30px" height="30px"></a>
        <img src="{{URL('user/imagess/menu.png')}}" class="menu-icon"
        onclick="menutoggle()">
    </div>
</div>
<!-- -------------account page-------------- -->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{URL('user/imagess/image02.png')}}" alt="image" width="70%">
            </div>
            <div class="col-2">
                <div class="form-container">
        {{-- <button type='button' class='btn btn-warning text-white w-100'><a href="login" class="activee">Login</a></button>
        <button type='button' class='btn btn-warning text-white w-100' value='signup'><a href="signup" class="activee">Register</a></button> --}}
            <a href="{{url('userlogin')}}"><input type="submit" value="Login"><br></a>
                <p>Have an account?</p><br>
                <a href="signup"><input type="submit" value="Register"></a>
                <p>Have not an account?</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ------------footer------------ -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 class="sizeb">Download Our App</h3>
                <p>Download App for Android ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{URL('user/imagess/play_store.png')}}" alt="image">
                    <img src="{{URL('user/imagess/app_store.png')}}" alt="image">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{URL('user/imagess/logo3.png')}}" alt="logo">
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Baby Accessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3 class="size">Useful Links</h3>
                <ul class="sizec">
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Discount</li>

                </ul>
            </div>
            <div class="footer-col-4">
                <h3 class="sizea">Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> - TINY TRESSERS</p>
    </div>
</div>
<!-- ----------js for toggle menu----------- -->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

<!-- ----------js for toggle form----------- -->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }


</script>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("MenuItems");
    var btns = header.getElementsByClassName("activeee");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>










</body>
</html>