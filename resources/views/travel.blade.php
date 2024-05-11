@extends("Master")
@section('preeti')
    <div class="container-fluid">
        <div class="row" style="min-height: 300px;">
            <img src="images/travel1.jpg" height="500px" width="100%"/>

                <div style="min-height:200px;width:80%;background:rgba(255,255,255,0.67); position: absolute;margin-top:270px;z-index:1;
                margin-left: 10%">
                    <form action=" " method="post" style="margin-top: 50px;margin-left:5px;font-size:17px">
                        @csrf
                        <input type="radio" name="trip" >one day
                        <input type="radio" name="trip">round trip
                        <br/><br/>
                <select name="start" style="width:25%;height:40px">
                    <option>From</option>
                    <option>Delhi</option>
                    <option>Gkp</option>
                    <option>Mumbai</option>
                    <option>Rachi</option>
                    <option>Jhanshi</option>
                    <option>Asam</option>
                    <option>Lonava</option>
                </select>


                <select  name="end" style="width:25%;height:40px">
                    <option>To</option>
                    <option>MP</option>
                    <option>Gkp</option>
                    <option>UK</option>
                    <option>Rachi</option>
                    <option>Jhanshi</option>
                    <option>Asam</option>
                    <option>Lonava</option>
                </select>
                        <input type="datetime-local" style="height:40px"/>
                        <select name="class" style="height:40px">
                            <option>1 travelar Economy Class</option>
                            <option>Economy  premium Class</option>
                            <option>Business</option>
                        </select>
                        <buttom class="fa fa-search btn btn-info">Search</buttom>

                </div>
            </form>
        </div>

        <div class="row" style="min-height: 15px"></div>
        <div class="row" style="min-height: 60px;background: white"><p style="margin-left: 10px"><h1>Bank Offers</h1></p></div>
    <div class="row">
        <a href="#">
            <img src="images/bank.png" height="200px" width="100%"/>
        </a>
    </div>
        <div class="row" style="min-height: 15px"></div>
        <div class="row">
            <a href="#">
            <img src="images/bank2.png" height="200px" width="100%"/>
            </a>
        </div>
        <div class="row" style="height: 15px"></div>
        <div class="row" style="height: 100px">
            <p style="margin-left: 10px"><h1>Top Offers for YOu</h1></p>
        </div>
        <div class="row">
            <a href="#">
                <img src="images/bank3.png" height="350px" width="1348"/>
            </a>
        </div>

    </div>


@endsection
