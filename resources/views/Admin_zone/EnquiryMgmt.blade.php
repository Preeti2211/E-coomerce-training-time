@extends("Admin_zone.AdminMaster")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>email</td>
                            <td>Query</td>
                            <td>delete</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contactus as $x)
                       <tr>
                           <td>
                               {{ $x->id }}
                           </td>
                           <td>
                               {{ $x->name }}
                           </td>
                           <td>
                               {{ $x->email }}
                           </td>
                           <td>
                               {{ $x->query }}
                           </td>

                           <td>
                               <a href="/deleteRecord/{{ $x->id }}" ><span class="fa fa-trash" style="color:red;
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
