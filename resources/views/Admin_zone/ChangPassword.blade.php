
@extends("Admin_zone/AdminMaster")
@section('content')
    <div class="container-fluid">
        <div class="row" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('images/side.webp')">
           <div class="col-4"></div>
            <div class="col-8">
            <form action="/ChangPassData/" method="post">
                @csrf
                <div style="min-height: 500px;width: 600px;margin-top:40px">
                    <span class="fa fa-user" style="min-height: 70px; width: 70px;border-radius: 50%;font-size:60px;
                    text-align: center;background:white;line-height: 70px;margin-left:230px"></span>
                    <div class="font-weight-bold text-white" style="text-align: center"><h1>Change Password</h1></div><br/>

                    <span class="fa fa-key text-white" style="font-size: 25px"> Enter new  password</span> <br/><br/>
                    <input type="password" name="npass" class="form-control" style="box-shadow:4px  10px gray inset"><br/><br/>
                    <span class="fa fa-key text-white" style="font-size: 25px"> Confirm password</span> <br/><br/>
                    <input type="password" name="cpass" class="form-control"><br/>
                   <center> <button class="btn btn-info">Update password</button></center>



                </div>
            </form>

        </div>
        </div>
    </div>

    @endsection
