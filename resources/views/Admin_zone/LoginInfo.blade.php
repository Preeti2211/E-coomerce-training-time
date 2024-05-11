@extends("Admin_zone.AdminMaster")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead class="table-danger">
                    <tr>
                        <td>SN No.</td>
                        <td>Email</td>
                        <td>password</td>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tbl_login as $x)
                        <tr>
                            <td>
                                {{ $x ->id }}
                            <td>
                                {{ $x->email}}
                            </td>

                            <td>
                                {{ $x->password}}
                            </td>

                           
                        </tr>

                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>




@endsection
