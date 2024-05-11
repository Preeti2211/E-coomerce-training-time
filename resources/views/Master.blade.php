<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-slim.min.js" ></script>
    <script src="js/bootstrap1.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/hover.css" rel="stylesheet"/>
    <link href="css/ame_css.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        $(document).ready(function (){
            $("body").on("copy",function (e){
                alert("Copy is not allowed")
                e.preventDefault();
            })
            $("body").on("paste",function (e){
                alert("Paste is not allowed")
                e.preventDefault();
            })
            $("body").on("cut",function (e){
                alert("cut is not allowed")
                e.preventDefault();
            })
            $("body").on("contextmenu",function (e){
                alert("Right Click is not allowed")
                e.preventDefault();
            })
        })
    </script>
    <script>
        $(document).ready(function(){
            var i=0;
            $(".bb").click(function(){
                var b=$(this).text();
                if(b=="ADD TO CART")
                {
                    i++;
                    $(this).text("REMOVE TO CART")
                    $(this).css("background","green")
                }
                else
                {
                    i--;
                    $(this).text("ADD TO CART")
                    $(this).css("background","red")
                }
                if(i==0)
                {
                    alert("Cart is empty ")
                    $("#pp").text(i)
                }
                else{
                    $("#pp").text(i)

                }
            });
            $("#dd").click(function (){

                if(i!=0) {
                    var c = confirm("Do you want to Purchase then make Payment ? ");
                    if (c == true) {
                        alert("Welcome to My e-Commerce Portal ");
                        window.location.href = "https://www.instamojo.com/@Mtechnologies";
                    } else {
                        alert("Thanks for visit us ");

                    }
                }
                else
                {
                    alert("Plz select any product")
                }
            })
        })
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row top">
        <div class="col-2"><button class="btn-outline-info logo" style="margin-top:15px;font-family: 'Monotype Corsiva';font-weight: bolder">LOVESHREE</button></div>
        <div class="col-2" ><p class="p_top">hello<br><span class="fa fa-map-marker" style="color:white;font-size:15px;
font-weight: bold">&nbsp;Select your Location</span></p></div>
        <div class="col-4">
            <div class="search">
                <div class="dropdown drop">

                    <div class="dropdown-toggle" data-toggle="dropdown" style="margin-left:12px;font-family: 'Mongolian Baiti'" >All</div>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Cloths</a>
                        <a href="#" class="dropdown-item">Shoes</a>
                        <a href="#" class="dropdown-item">Electronics devices</a>
                        <a href="#" class="dropdown-item">Books</a></div>
                </div>
                <form action="/displayProd" method="post">
                    @csrf
                    <div class="in">
                        <input type="text" name="search" >
                    </div>
                    <button class="sear">
                        <span class="fa fa-search" style="color:black;height:20px;width:20px;margin-top:5px;margin-left:5px"></span>
                    </button>
                </form>
            </div>
        </div>
        <div class="col-1">
            <div class="dropdown">

                <div class="dropdown-toggle" data-toggle="dropdown" style="margin-top:20px;color:white;">
                    <span class="fa fa-flag" style="min-height:10px;min-width:10px;color:white;font-family: 'Mongolian Baiti'">&nbsp; Nation</span></div>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">India</a>
                    <a href="#" class="dropdown-item">Marishush</a>
                    <a href="#" class="dropdown-item">USA</a>
                    <a href="#" class="dropdown-item">Nepal</a></div>
            </div>
        </div>
        <div class="col-1">

            <div class="order"> <a href="/regist" style="color:white;font-size:15px;margin-top:20px">  <span>Create Account</span></a></div>



        </div>
        <div class="col-1">
            <div class="order"> <a href="#"><span style="color:white;font-size:15px;">Accounts and order</span></a></div>
        </div>
        <div class="col-1">
            <div class="order1" id="dd"><a href="#"> <span  class="fa fa-shopping-cart" style="color:white;font-size:20px;"> &nbsp; <span id="pp">0</span> Cart</span></a></div>
        </div>
        <div class="row">
            <div><ul class="nav anch" style="font-family: 'Bodoni MT Black'">
                    <li class="nav-item"><a class="nav-link text-white" href="#">All</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="http://127.0.0.1:8000/">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-white" href="serve" data-toggle="dropdown">Our Services</a>
                        <ul class="dropdown-menu">
                            <a href="#" class="dropdown-item">Order Cancle</a>
                            <a href="#">Return Order</a>
                            <a href="#">Complaint</a>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="/reg"  >Registraion page</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/img">Image gallary</a></li>
                    <li class="nav-item"><a class="nav-link">Notification</a></li>

                    <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/logi">Login</a></li>

                </ul>
            </div>
            <a href="#"><span class="fa fa-shopping-cart" style="color:white;font-size:20px; margin-top:10px;margin-left:60px;">Shopping made easy |
            </span></a> <a href="#" style="color:white;font-size:15px; margin-top:10px;">
                <span>Download the app</span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12" style="height:100px;background:white;font-family: 'Bodoni MT Black';text-align: center">
            <ul class="nav menu">
                <li class="nav-item"><a href="/offer" class="nav-link text1"><img src="images/offer.webp" height="50px" width="55px"><br/>
                        Top Offres</a></li>
                <li class="nav-item"><a href="/travel" class="nav-link text1"><img src="images/travel.webp" height="50px" width="55px"><br/>
                        travel</a></li>
                <li class="nav-item"><a href="/appli" class="nav-link text1"><img src="images/home.webp" height="50px" width="55px"><br/>
                        Home Apliances</a></li>
                <li class="nav-item"><a href="/laptop" class="nav-link text1"><img src="images/lapt.jpeg" height="50px" width="55px"><br/>
                        Laptops with Offres</a></li>
                <li class="nav-item"><a href="/toys" class="nav-link text1"><img src="images/toy.webp" height="50px" width="55px"><br/>
                        Toys & Beauty</a></li>
                <li class="nav-item"><a href="/grocery" class="nav-link text1"><img src="images/grocery.webp" height="50px" width="55px"><br/>
                        Groceries and more</a></li>
                <li class="nav-item"><a href="/tradinal" class="nav-link text1"><img src="images/gawn6.jpg" height="50px" width="55px"><br/>
                        Fashion</a></li>

                <li class="nav-item"><a href="/appli" class="nav-link text1"><img src="images/appliiances.webp" height="50px" width="55px"><br/>
                        Appliances</a></li>
            </ul>
        </div>
    </div>
    <div class="row" style="min-height: 15px;background: rgba(0,0,0,0.1)"></div>

    <div class="row">
       @yield('preeti')
    </div>
    <div class="row" style="min-height:400px;background: darkslategray;color:white;font-family: 'Monotype Corsiva';font-weight: bold">

        <div class="col-sm-2">
            <h3 style="text-transform:uppercase;margin-top:30px">about</h3>
            <p>
            <ul style="list-style-type: none;margin-left:0px;font-weight: bolder">
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        home
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        about us
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        gallery
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        blog
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        career write us
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        reach us
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Vrindavan
                    </a></li>
            </ul>
            </p>
        </div>
        <div class="col-sm-1">
            <h3 style="text-transform:uppercase;margin-top:30px">Help</h3>
            <p>
            <ul style="list-style-type: none;margin-left:0px">
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Payment
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Shipping
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Cancellation & Return Order
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Report Infringment
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Carrer with Us
                    </a></li>
                <li><a href="#" style="text-decoration: none; color:white;text-transform:uppercase">
                        Any Other Query
                    </a></li>

            </ul>
            </p>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
            <h3 style="text-transform:uppercase;margin-top:30px">Contact Us </h3>
            <p> Krishna -1122<br>Near Prem Mandir Vrindavan Mathura Uttar Pradesh<br><br>
                <a href="#" style="text-decoration: none; color:white;">Email :Loveshree1122@gmail.com</a></p>
            <a href="#"><span style="border-radius: 50%;height:30px;width:30px;background: blue;color:white;line-height:30px;text-align:center" class="fa fa-facebook"></span></a>
            <a href="#"><span style="border-radius: 50%;height:30px;width:30px;background: skyblue;color:white;line-height:30px;text-align:center" class="fa fa-twitter"></span></a>
            <a href="#"><span style="border-radius: 50%;height:30px;width:30px;background: darkred;color:white;line-height:30px;text-align:center" class="fa fa-pinterest"></span></a>
            <a href="#"><span style="border-radius: 50%;height:30px;width:30px;background: pink;color:white;line-height:30px;text-align:center" class="fa fa-instagram"></span></a>
            <a href="#"><span style="border-radius: 50%;height:30px;width:30px;background: blue;color:white;line-height:30px;text-align:center" class="fa fa-linkedin"></span></a>



        </div>
        <div class="col-sm-3">
            <h3 style="text-transform:uppercase;margin-top:30px"> map location</h3><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.9414789123575!2d77.07226401458297!3d28.481308997661028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d193a8a8fa6ad%3A0x980f777b28e9b14e!2sV3%20Events%20%26%20Weddings%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1661001967875!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-sm-3" style="margin-top:30px;color:white">
            <h3>Thanks Notes</h3>
            <p><span style="font-size:20px;color:cyan">Thanks for Contacting Us</span></p>
            <p>We are very happy and i hope you are satisfied our service  .
                if you have any suggestion please give feedback .<br/>
                <button class="btn btn-info">Feedback</button>

            </p>
        </div>


    </div>
    <div class="row" style="height:100px;border-top:2px solid white ;background: darkslategray;font-family:'Monotype Corsiva'">
        <ul class="nav Fo-m" style="margin-top: 10px;text-align: center;margin-left: 60px">
            <li class="nav-item"><a href="#" class="nav-link text-white">
                    <img src="images/fg0.svg" height="20px" width="20px"><p class="text2">Became a seller</p>
                </a> </li>
            <li class="nav-item"><a href="#" class="nav-link text-white">
                    <img src="images/fg_ad.svg" height="20px" width="20px"><p class="text2">Advertise</p>
                </a> </li>
            <li class="nav-item"><a href="#" class="nav-link text-white">
                    <img src="images/fg.svg" height="20px" width="20px"><p class="text2">Gift Cards</p>
                </a> </li>
            <li class="nav-item"><a href="#" class="nav-link text-white">
                    <img src="images/fg_h.svg" height="20px" width="20px"><p class="text2">Help Center</p>
                </a> </li>
            <li class="nav-item"><a href="#" class="nav-link text-white">
                    &copy; <p class="text2">2007-20022 Loveshree.com</p>
                </a> </li>
            <li class="nav-item"><a href="#" class="nav-link">
                    <img src="images/pay.svg" height="20px" >
                </a> </li>
        </ul>
    </div>

</div>

</div>

</body>
</html>
