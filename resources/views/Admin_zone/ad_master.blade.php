<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/admin_dash.css" rel="stylesheet"/>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- local  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">


</head>

<body>


<!-- navbar -->
<nav class="navbar navbar-expand-md  navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse " id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar navbar -->
                <div class="col-lg-3 col-xl-2 col-md-4 sidebar fixed-top">
                    <a href="#" class="navbar-brand text-white d-block mx-auto text-center mb-4 bottom-border pb-2 text-uppercase font-weight-bold">
                         Admin
                    </a>

                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" width="50"height="50" alt="nice" class="rounded-circle mr-3">
                    <a href="#" class="text-white font-weight-bold" style="font-family: 'Monotype Corsiva';font-size: 25px;">Loveshree </a>
                    <div class="border-bottom pb-3"></div>
                    <ul class="navbar-nav flex-column mt-4"  style="min-height:100px">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 current"> <i class="fa fa-home text-light fa-lg mr-3" aria-hidden="true"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dash" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-commenting" aria-hidden="true"></i> Notification
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-product-hunt" aria-hidden="true"></i> Product Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cart" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-info-circle" aria-hidden="true"></i> Login Information
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i  class="fa fa-search-plus" aria-hidden="true"></i> Enquiry Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-comments"  aria-hidden="true"></i> Review Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-commenting" aria-hidden="true"></i> Feedback Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-sign-out"aria-hidden="true"></i>LogOut
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end sidebar -->

                <!--  top nav-->
                <div class="col-lg-9 col-xl-10 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                        </div>
                        <div class="col-md-5">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control"id="search-input" placeholder="Search here">
                                    <button type="button" class="btn btn-light"id="search-button"><i class="fa fa-search text-danger"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item icon-parent">
                                    <a href="#" class="nav-link icon-bullet "><i class="fa fa-comments text-muted fa-lg"></i></a>
                                </li>
                                <li class="nav-item icon-parent">
                                    <a href="#" class="nav-link icon-bullet"><i class="fa fa-bell text-muted fa-lg"></i></a>
                                </li>
                                <li class="nav-item ml-md-auto ">
                                    <a href="#" class="nav-link "><i class="fa fa-sign-out text-danger fa-lg"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="row" style="min-height: 700px;">
                       @yield('admin')

                    </div>


                </div>
                <!-- end nav -->
            </div>
        </div>
    </div>

</nav>





<!-- end navbar -->


<!-- local -->
<script type="text/javascript " src="script.js "></script>
<script src="js/bootstrap.min.js "></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>

</html>
