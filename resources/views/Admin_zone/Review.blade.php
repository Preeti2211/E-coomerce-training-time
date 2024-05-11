@extends("Admin_zone.AdminMaster")
@section('content')
    <script>
         $(document).ready(function(){
        $(".ss").click(function(){
            var d=$(this).attr('data');
            $('#hdn').val(d);
            for(var i=1;i<=5;i++)
            {
                if(i<=d)
                {
                    $("#s"+i).css("color","goldenrod");
                }
                else {
                    $("#s"+i).css("color","red");
                }
            }

        })
         })

    </script>


    <div class="container-fluid">
    <div class="row" style="background: conic-gradient(black,maroon,black,maroon)">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="border:4px solid blue;min-height: 500px;width:600px">
            <form action="/savereview/" method="post"
                @csrf

                <br/>
                <span class="fa fa-user"></span>Name
                <input type="text" class="form-control" name="name"/>
                <br/>
                <span class="fa fa-envelope"></span>Email
                <input type="email" class="form-control" name="email"/><br/>
                Rating<br/>
                <span class="fa fa-star ss" data="1"  id="s1" style="font-size:50px;color:red"></span>
                <span class="fa fa-star ss" data="2"   id="s2" style="font-size:50px;color:red"></span>
                <span class="fa fa-star ss" data="3"   id="s3" style="font-size:50px;color:red"></span>
                <span class="fa fa-star ss" data="4"  id="s4"  style="font-size:50px;color:red"></span>
                <span class="fa fa-star ss" data="5"   id="s5" style="font-size:50px;color:red"></span>
                <br/>
                <br/>
                <textarea class="form-control" name="msg"></textarea><br/><br/>
                <input type="hidden" id="hdn" name="hdn"/>
                <button class="btn btn-info">Submit</button>

            </form>


        </div>
    </div>
    </div>


@endsection
