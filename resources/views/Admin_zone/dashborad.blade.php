@extends("Admin_zone.AdminMaster")
@section('content')
    <link href="css/bootstrap.css" rel="stylesheet">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 btn-outline-danger  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
            <a class="nav-link" href="/enquri" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:50px;">Enquiry Management</a>
        </div>
        <div class="col-md-3 btn-outline-info hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%">
            <a class="nav-link" href="/loginAd" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:70px;">Login Info</a>
        </div>
        <div class="col-md-3 btn-outline-info hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%">
            <a class="nav-link" href="/AddPro" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:70px;">Add Product</a>
        </div>

    </div>
        <div class="row">
            <div class="col-md-3 btn-outline-primary  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
                <a class="nav-link" href="/chPass" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:50px;">Change Password</a>
            </div>
            <div class="col-md-3 btn-outline-secondary  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
                <a class="nav-link" href="/review" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:70px;">Review</a>
            </div>
            <div class="col-md-3 btn-outline-info  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
                <a class="nav-link" href="/cart" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:70px;">Cart</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 btn-outline-info  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
                <a class="nav-link" href="notify" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:50px;">Notification</a>
            </div>
            <div class="col-md-3 btn-outline-danger  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
                <a class="nav-link" href="/LogOut" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:70px;">Log Out</a>
            </div>
            <div class="col-md-3 btn-outline-info  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%;">
                <a class="nav-link" href="/Feedback" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:70px;">Feedback</a>
            </div>

        </div>
        <div class="row">
        <div class="col-md-3 btn-outline-dark  hvr-grow-shadow" style="min-height:250px ;margin: 3%;border-radius: 50%">
            <a class="nav-link" href="/product" style="font-family: 'Monotype Corsiva';font-size: 45px;font-weight: bold;color:white;text-align: center;
           margin-top:50px;">Product Management</a>
        </div></div>
    </div>



@endsection
