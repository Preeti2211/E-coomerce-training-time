@extends("Master")
@section('preeti')
<div class="container-fluid">
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
                    <img src="images/appli.jpg" height="400px" width="100%"/>
                </div>
                <div class="carousel-item">

                    <img src="images/appli1.png" height="400px" width="100%"/>
                </div>
                <div class="carousel-item">
                    <img src="images/appli3.jpg" height="400px" width="100%"/>
                </div>
                <div class="carousel-item">
                    <img src="images/appli4.jpg" height="400px" width="100%"/>
                </div>
                <div class="carousel-item">
                    <img src="images/appli5.webp" height="400px" width="100%"/>
                </div>

            </div>
            <a href="#abc" class="carousel-control-prev" data-slide="prev" >
                <span class="carousel-control-prev-icon" ></span></a>
            <a href="#abc" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span></a>
        </div>
    </div>
</div>
    <div class="row" style="min-height: 15px"></div>
    <div class="row">
        <a href="#">
    <img src="images/appliances.png" width="1348" height="250px" style="background-size:cover"></a>
    </div>
    <div class="row" style="min-height:15px"></div>
<div class="row" style="min-height:50px;background:white">
    <p style="margin-left: 10px"><h1>Star Brands</h1><br/>
    Top Brands for You</p>
</div>

    <div class="row">
        <a href="#">
            <img src="images/appliances1.png" width="100%" min-height="250px">
        </a>
    </div>
    <div class="row" style="min-height:15px"></div>
    <div class="row" style="min-height:50px;background:white">
        <p style="margin-left: 10px"><h1>New Launches</h1><br/>
              new launches for You</p>
    </div>

    <div class="row">
        <a href="#">
            <img src="images/appliances2.png" width="100%" min-height="250px">
        </a>
    </div>

    </div>
@endsection
