@extends("Master")
@section('preeti')
    <div class="row" style="min-height: 500px;">
        <div class="col-12" style="
        background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1),rgba(0,0,0,0.5)),url('images/login1.jpg');background-size:100% 100%;min-height:500px;
         width:1366px">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8" style="">
                     <span class="fa fa-user" style="height:80px;width:80px;background:rgba(255,255,255,0.67);color:black;font-size:50px;
                      border-radius:50%;text-align:center;position: absolute;left:400px;top:10px;z-index: 1"></span>
                    <div class="form-login">  <div class="form-btn">

                         <h1>Register</h1>


                        <form action="/reg" method="post">
                            @csrf
                            <br/>
<span class="fa fa-envelope"></span><span style="font-family: 'Bodoni MT Black'">Enter Your Email</span>
                            <input type="email" required name="email" placeholder="Enter youe email address" class="form-control" >
<br/>
                            <span class="fa fa-key"></span><span style="font-family: 'Bodoni MT Black'">Enter Your Password</span>
                            <input type="password"  required name="passowrd" placeholder="Enter youe password"  class="form-control">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <style>

        .form-login
        {
            background:rgba(255,255,255,0.67);
            width:500px;
            height:400px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
            overflow:hidden;
            margin-top:50px;
        }
        .form-login button
        {
            margin:20px;
            border:none;
            font-size:20px;
            background:none;
            cursor:pointer;
            outline: none;
        }
        .form-btn
        {
            display: inline-block;

        }

        #register
        {
            left:0px;
        }
        .form-login form input{

            height:30px;
            margin:20px 0;
            padding: 0 10px;
            border:1px solid #cccccc;
        }
        .form-login form .btn{
            width:100%;
            border:none;
            cursor:pointer;
            margin: 10px 0;
            color:#cccccc;
            background-color: rgba(4, 115, 142);
            border-radius:20px;
        }
        .form-login form .btn:focus{
            outline: none;
        }
        form a{
            margin-left:50px
        }
        #indicator
        {
            width:100px;
            border:none;
            background: blue;
            height: 3px;
            margin-top:8px;
            transform: translateX(100px);

        }
    </style>

@endsection

