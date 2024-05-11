@extends("master")
@section('preeti')
    <script>
        function getcode()
        {
            var hexacode="0123456789ABCDEF";
            var code=" ";
            for(var i=0;i<6;i++)
            {
                code= code+hexacode[Math.floor( Math.random()*12)];
            }
            return code;
        }
        function f1()
        {
            var c=getcode();
            document.getElementById("sp1").innerHTML=c;

            document.getElementById("hdn").value=c;
        }
        window.onload=f1;
    </script>
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
    <div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)),url('images/login1.jpg')">
        <form action="/saveac/" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6" style="min-height:850px;border:3px solid teal;margin:30px;width:1000px;color:white">
                    <h2 style="text-align: center"> Create New Account</h2><br/><br/>
                    <span class="fa fa-user"></span>Enter Name
                    <input type="text" class="form-control" required name="name"/><br/>
                    <span class="fa fa-user"></span>Father Name
                    <input type="text" class="form-control" required name="faName"/><br/>
                    <span class="fa fa-phone" ></span>Enter Mobile Number<br/>
                    <input type="text"  required style="height: 35px;" name="mob" class="form-control"/><br/><br/>
                    <span class="fa fa-envelope"></span> Enter Email
                    <br/>
                    <input type="text"  required style="height: 35px;" name="email"  class="form-control"/>

                    <br/><br/>

                    <span class="fa fa-user" style="height:35px;width:35px;font-size:30px"></span>Gender<br/>
                    <input type="radio" value="male" name="g"/>Male
                    <input type="radio" value="male" name="g"/>Female
                    <br/><br/>
                    <span class="fa fa-lock"></span>Enter Password
                    <input type="password" class="form-control" required name="gender" dirname="password"/><br/>
                    Enter Captcha Code
                    <span style="font-size:30px;color:red; width:0px" id="sp1">jakhka</span>
                    <span  onclick="f1()"class="fa fa-refresh " style="font-size:25px; color:blue;cursor:pointer;margin-left:5px"></span>
                    <br/>
                    Enter Above captch <input type="text" class="form-control" style="height:35px;"   required name="captcha" /><br/>
                    <center><button class="btn btn-danger">Register Now</button><br/>
                        <a href="#" class="font-weight-bold">Forget Password !</a><br/>
                        <input type="hidden" name="hdn" id="hdn"/>
                        <p class="font-weight-bold">Not registerd ?<a href="/regist" style="margin-left: 5px;">Register here</a></p></center>
                </div> </div></form>

    </div>

@endsection
