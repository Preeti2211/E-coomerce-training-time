@extends("Admin_zone.AdminMaster")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Rating</td>
                        <td>Feedback</td>
                        <td>Delete</td>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($review as $y)
                        <tr>
                            <td>{{$y->name}}</td>
                            <td>{{$y->email}}</td>
                            <td>{{$y->rating}}</td>
                            <td>{{$y->msg}}</td>
                            <td>
                                <a href="#" ><span class="fa fa-trash" style="color:red;
                               font-size:25px">

                                   </span></a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>



@endsection
