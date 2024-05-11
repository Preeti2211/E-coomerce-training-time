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
        <div class="col-12" style="height:100px;background:white;font-family: 'Bodoni MT Black';text-align: center;">
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

    <div class="row">
        <div class="col-12 size">
            <ul class="nav anch1" style="font-family: 'Bodoni MT Black'">

                <li class="nav-item"><a class="nav-link text-dark" href="/bestsellar">Best Sellers</a></li>
                <li class="nav-item"><a class="nav-link text-dark"  href="/new">hot new release</a></li>
                <li class="nav-item"><a class="nav-link text-dark"  href="/movers">Movers and shades</a></li>
                <li class="nav-item"><a class="nav-link text-dark"  href="/wished">most wished for</a></li>
                <li class="nav-item"><a class="nav-link text-dark"  href="/gift">most gifted</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12" style="height:400px">
            <div class="carousel slide" id="abc">

                <ol class="carousel-indicators">
                    <li class="active" data-target="#abc" data-slide-to="0"></li>
                    <li data-target="#abc" data-slide-to="1"></li>
                    <li data-target="#abc" data-slide-to="2"></li>
                    <li data-target="#abc" data-slide-to="3"></li>
                    <li data-target="#abc" data-slide-to="4"></li>

                </ol>
                <div class="carousel-inner" data-ride="carousel">
                    <div class="carousel-item active">
                        <img src="images/slider10.png" height="400px" width="100%"/>
                    </div>
                    <div class="carousel-item">

                        <img src="images/shoppi_girl.jpg" height="400px" width="100%"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider9.png" height="400px" width="100%"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider2.png" height="400px" width="100%"/>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider3.jpg" height="400px" width="100%"/>
                    </div>

                </div>
                <a href="#abc" class="carousel-control-prev" data-slide="prev" >
                    <span class="carousel-control-prev-icon" ></span></a>
                <a href="#abc" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 logo-des">
            <p style="font-family: 'Mongolian Baiti'"><span style="font-family: 'Monotype Corsiva';font-weight: bolder">Loveshree BestSellars</span>
                <br>
                Our most popular product based on best sellers choice</p>
        </div>
    </div>

    <div class="row size-start">
        <div class="col-2" style="min-height:660px;background:white;border-right:2px solid black;font-family: 'Bodoni MT Black'">
            <p style="font-weight: bold">Any department</p>
            <ul class="nav">



                <li class="nav-item"><a class="nav-link text-capitalize" href="/movers">amezon launchpad</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/grocery">grocery</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/toys">baby product</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/bags">bags wallet and luggage</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/toys">beauty</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/laptop">electronics</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/offer">books</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/gift">gifts cards</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/appli">home appliances</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/wished">most wished</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/">apps for android</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/travel">travel</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/offer">top offers</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/trainal">fashian</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/bestsellar">best sellars</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/img">gallary</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/new">New items</a></li>
                <li class="nav-item"><a class="nav-link text-capitalize" href="/new">hot new release</a></li>

            </ul>
        </div>

        <div class="col-10" style="min-height: 700px;font-family: 'Mongolian Baiti'">
            <div class="row"  style="min-height: 30px;min-width:100%">
                <p style="font-size: 20px;font-weight: bold;margin-left:15px"> Boys Latest Products </p><br></div>
           <div class="row"  style="min-height: 300px;min-width:100%;background:white" >

                               <div class="col-12">
                                   <ul class="nav menu" style="margin-left:60px;">
                                  @foreach($prod as $x)
                                      @if($x->categary=="Boys")
                                       <li class="nav-item"><a href="#" class="nav-link text1">
                                               <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                               <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center;margin-left: 50px"> {{ $x->proName }} </span><br>
                                                 <span style="text-align: center;font-size: 20px;margin-left: 50px">RS  {{ $x->price }} </span><br></p>
                                           </a>
                                           <button class="btn btn-danger bb " style="margin-left: 50px;margin-bottom: 20px">ADD TO CART</button>
                                       </li>
                                           @endif
                                       @endforeach
                                   </ul>

                   </div>


                </div>


            <div class="row"  style="min-height: 30px;min-width:100%">
                <p style="font-size: 20px;font-weight: bold;margin-left:15px"> Best Sellers in Electronic Devices....</p><br></div>
            <div class="row"  style="min-height: 300px;min-width:100%;background:white;" >
                <div class="carousel slide" id="ac">
                    <div class="carousel-inner" data-ride="carousel">
                        <div class="carousel-item active">
                            <div class="row" style="min-height: 200px;">
                                <div class="col-12">
                                    <ul class="nav menu" style="margin-left:60px;">

                                        @foreach($prod as $x)
                                            @if($x->categary=="Mouse")
                                                <li class="nav-item"><a href="#" class="nav-link text1">
                                                        <img src="products/{{ $x->pic }}" height="250px" width="300px"><br>
                                                        <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center;margin-left: 50px"> {{ $x->proName }} </span><br>
                                                            <span style="text-align: center;font-size: 20px;margin-left: 50px">RS  {{ $x->price }} </span><br></p>
                                                    </a>
                                                    <button class="btn btn-danger bb " style="margin-left: 50px;margin-bottom: 20px">ADD TO CART</button>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="min-height: 200px;">

                                <div class="col-12">
                                    <ul class="nav menu">

                                        @foreach($prod as $x)
                                            @if($x->categary=="Laptop2")
                                                <li class="nav-item"><a href="#" class="nav-link text1">
                                                        <img src="products/{{ $x->pic }}" height="250px" width="330px"><br>
                                                        <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center;margin-left: 50px"> {{ $x->proName }} </span><br>
                                                            <span style="text-align: center;font-size: 20px;margin-left: 50px">RS  {{ $x->price }} </span><br></p>
                                                    </a>
                                                    <button class="btn btn-danger bb " style="margin-left: 50px;margin-bottom: 20px">ADD TO CART</button>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="min-height: 200px;">
                                <div class="col-12">
                                    <ul class="nav menu">

                                        @foreach($prod as $x)
                                            @if($x->categary=="Keyboard")
                                                <li class="nav-item"><a href="#" class="nav-link text1">
                                                        <img src="products/{{ $x->pic }}" height="250px" width="330px"><br>
                                                        <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center;margin-left: 50px"> {{ $x->proName }} </span><br>
                                                            <span style="text-align: center;font-size: 20px;margin-left: 50px">RS  {{ $x->price }} </span><br></p>
                                                    </a>
                                                    <button class="btn btn-danger bb " style="margin-left: 50px;margin-bottom: 20px">ADD TO CART</button>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#ac" class="carousel-control-prev" data-slide="prev" >
                        <span class="carousel-control-prev-icon"></span></a>

                </div>

            </div>

            </div>
            </div>

    <div class="row" style="min-height:20px"></div>
    <div class="row" style="min-height:100px;background:white;font-family: 'Bodoni MT Black'">
        <p class="tbest"><span class="bfont">Women,s Collection</span>
            <br/>Women,s Collection
        </p>
    </div>
    <div class="row" style="min-height:350px;background:white;font-family: 'Mongolian Baiti'">
        <div class="col-3 anim" style="background:gray">
            <h1>Women Fashion </h1>
            <img src="images/wshirt4.webp" height="280px" width="280px"><br>
        </div>
        <div class="col-9">

            <div class="carousel slide" id="dg">
                <div class="carousel-inner" data-ride="carousel">
                    <div class="carousel-item active">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >



                                    @foreach($prod as $x)
                                        @if($x->categary=="Women")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="280px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center;margin-left: 50px"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size: 20px;margin-left: 50px">RS  {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb " style="margin-left: 50px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >

                                    @foreach($prod as $x)
                                        @if($x->categary=="Women1")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size: 20px;margin-left: 50px">RS  {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb " style="margin-left: 50px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>
                                        @endif
                                    @endforeach



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#dg" class="carousel-control-prev" data-slide="prev" >
                    <span class="carousel-control-prev-icon" ></span></a>

            </div>



        </div>
    </div>

    <div class="row" style="min-height:20px"></div>
    <div class="row" style="min-height:100px;background:white;font-family: 'Bodoni MT Black'">
        <p class="tbest"><span class="bfont">Men Collection</span>
            <br/>Men Collection
        </p>
    </div>
    <div class="row" style="min-height:350px;background:white;font-family: 'Mongolian Baiti'">
        <div class="col-3 anim" style="background:gray">
            <h1>Men Fashion </h1>
            <img src="images/shirt.jpg" height="280px" width="280px"><br>
        </div>
        <div class="col-9">

            <div class="carousel slide" id="gg">
                <div class="carousel-inner" data-ride="carousel">
                    <div class="carousel-item active">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >
                                    @foreach($prod as $x)
                                        @if($x->categary=="Men")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >

                                    @foreach($prod as $x)
                                        @if($x->categary=="shoes")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>

                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >

                                    @foreach($prod as $x)
                                        @if($x->categary=="Men")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>

                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >

                                    @foreach($prod as $x)
                                        @if($x->categary=="shoes")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>

                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#gg" class="carousel-control-prev" data-slide="prev" >
                    <span class="carousel-control-prev-icon" ></span></a>

            </div>



        </div>
    </div>

    <div class="row" style="min-height:20px"></div>
    <div class="row" style="min-height:100px;background:white;font-family:'Bodoni MT Black'">
        <p class="tbest"><span class="bfont">Laptop Collection</span>
            <br/>Laptaop Collection
        </p>
    </div>
    <div class="row" style="min-height:350px;background:white;font-family:'Mongolian Baiti'">
        <div class="col-3 anim" style="background:gray">
            <h1> Best prices Laptop </h1>
            <img src="images/lapt1.jpg" height="280px" width="280px"><br>
        </div>
        <div class="col-9">

            <div class="carousel slide" id="ag">
                <div class="carousel-inner" data-ride="carousel">

                    <div class="carousel-item active">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu" >

                                    @foreach($prod as $x)
                                        @if($x->categary=="Laptop1")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu">
                                    @foreach($prod as $x)
                                        @if($x->categary=="Laptop2")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row" style="min-height: 300px;">
                            <div class="col-12">
                                <ul class="nav menu">
                                    @foreach($prod as $x)
                                        @if($x->categary=="Laptop3")
                                            <li class="nav-item"><a href="#" class="nav-link text1">
                                                    <img src="products/{{ $x->pic }}" height="250px" width="230px"><br>
                                                    <p class="tbest"> <span style="color:black;font-weight:bold;font-size:25px;text-align: center"> {{ $x->proName }} </span><br>
                                                        <span style="text-align: center;font-size:20px">RS {{ $x->price }} </span><br></p>
                                                </a>
                                                <button class="btn btn-danger bb" style="margin-left:80px;margin-bottom: 20px">ADD TO CART</button>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <a href="#ag" class="carousel-control-prev" data-slide="prev" >
                    <span class="carousel-control-prev-icon" ></span></a>

            </div>



        </div>
    </div>


    <div class="row" style="min-height:400px;background: darkslategray;color:white;font-family: 'Monotype Corsiva';font-weight: bold">

        <div class="col-sm-2">
            <h3 style="text-transform:uppercase;margin-top:30px">about</h3>
            <p>
            <ul style="list-style-type: none;margin-left:0px;font-weight: bolder">
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                        home
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                        about us
                    </a></li>
                <li><a href="/img" style="text-decoration: none; color:white;text-transform:uppercase">
                        gallery
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                        blog
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                        career write us
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
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
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                      Payment
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                        Shipping
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                        Cancellation & Return Order
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
                       Report Infringment
                    </a></li>
                <li><a href="/" style="text-decoration: none; color:white;text-transform:uppercase">
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
            <li class="nav-item"><a href="/bestsellar" class="nav-link text-white">
                    <img src="images/fg0.svg" height="20px" width="20px"><p class="text2">Became a seller</p>
                </a> </li>
            <li class="nav-item"><a href="/grocery" class="nav-link text-white">
                    <img src="images/fg_ad.svg" height="20px" width="20px"><p class="text2">Advertise</p>
                </a> </li>
            <li class="nav-item"><a href="/gift" class="nav-link text-white">
                    <img src="images/fg.svg" height="20px" width="20px"><p class="text2">Gift Cards</p>
                </a> </li>
            <li class="nav-item"><a href="/help" class="nav-link text-white">
                    <img src="images/fg_h.svg" height="20px" width="20px"><p class="text2">Help Center</p>
                </a> </li>
            <li class="nav-item"><a href="/" class="nav-link text-white">
                    &copy; <p class="text2">2007-20022 Loveshree.com</p>
                </a> </li>
            <li class="nav-item"><a href="/" class="nav-link">
                    <img src="images/pay.svg" height="20px" >
                </a> </li>
        </ul>
    </div>



</body>
</html>

