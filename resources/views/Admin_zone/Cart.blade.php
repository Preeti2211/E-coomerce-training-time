@extends("Admin_zone.AdminMaster")
@section('content')

{{--<div class="container cart-page" style="background:rgba(255,255,255,0.67)">--}}
{{--    <table>--}}
{{--        <tr><th>--}}
{{--                Product--}}
{{--            </th>--}}
{{--            <th>Quantity</th>--}}
{{--            <th>Submit Total</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>--}}
{{--                <div class="cart-info">--}}

{{--                    <img src="images/tshirt1.jpg" height="100px" width="100px">--}}
{{--                    <div>--}}
{{--                        <p>Men t shirt</p>--}}
{{--                        <small>Price :Rs 5000</small><br/>--}}
{{--                        <a href="">Remove</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--            <td><input type="number" value="1"> </td>--}}
{{--            <td>Rs 500</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>--}}
{{--                <div class="cart-info">--}}

{{--                    <img src="images/sandle2.jpg" height="100px" width="100px">--}}
{{--                    <div>--}}
{{--                        <p>Sandle</p>--}}
{{--                        <small>Price :Rs 1500</small><br/>--}}
{{--                        <a href="">Remove</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--            <td><input type="number" value="1"> </td>--}}
{{--            <td>Rs 1500</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>--}}
{{--                <div class="cart-info">--}}

{{--                    <img src="images/watch.webp" height="100px" width="100px">--}}
{{--                    <div>--}}
{{--                        <p>watch</p>--}}
{{--                        <small>Price :Rs 2500</small><br/>--}}
{{--                        <a href="">Remove</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--            <td><input type="number" value="1"> </td>--}}
{{--            <td>Rs 2500</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>--}}
{{--                <div class="cart-info">--}}

{{--                    <img src="images/juti.jpeg" height="100px" width="100px">--}}
{{--                    <div>--}}
{{--                        <p>footwear</p>--}}
{{--                        <small>Price :Rs 500</small><br/>--}}
{{--                        <a href="">Remove</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--            <td><input type="number" value="1"> </td>--}}
{{--            <td>Rs 500</td>--}}
{{--        </tr>--}}
{{--    </table>--}}

{{--    <div class="total-price">--}}
{{--        <table>--}}
{{--            <tr>--}}
{{--                <td>SubTotal</td>--}}
{{--                <td>Rs 2000.00</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Tax</td>--}}
{{--                <td>Rs 190.00</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Total</td>--}}
{{--                <td> Rs 2190.00</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}

{{--    <style>--}}
{{--        /*--- cart item--*/--}}
{{--        .cart-page{--}}
{{--            margin:80px auto;--}}
{{--        }--}}
{{--        table{--}}
{{--            width:100%;--}}
{{--            border-collapse: collapse;--}}
{{--        }--}}
{{--        .cart-info{--}}
{{--            display:flex;--}}
{{--            flex-wrap: wrap;--}}
{{--        }--}}
{{--        .cart-info div{--}}
{{--            margin-top:15px;--}}
{{--            margin-left:10px;--}}
{{--        }--}}
{{--        th{--}}
{{--            text-align:left;--}}
{{--            padding:5px;--}}
{{--            background: #ff523b;--}}
{{--            font-weight: normal;--}}
{{--            colo:white;--}}
{{--        }--}}
{{--        td{--}}
{{--            padding:10px 5px;--}}
{{--        }--}}
{{--        td input{--}}
{{--            width:40px;--}}
{{--            height:30px;--}}
{{--            padding: 5px;--}}
{{--        }--}}
{{--        td a{--}}
{{--            color:#ff523b;--}}
{{--            font-size:12px;--}}
{{--        }--}}
{{--.total-price--}}
{{--{--}}
{{--    display: flex;--}}
{{--    justify-content: flex-end;--}}

{{--}--}}
{{--.total-price table--}}
{{--{--}}
{{--    border-top:3px solid #ff523b;--}}
{{--    width:100%;--}}
{{--    max-width: 440px;--}}
{{--}--}}
{{--td:last-child{--}}
{{--    text-align: right;--}}
{{--}--}}
{{--th:last-child{--}}
{{--    text-align: right;--}}
{{--}--}}


{{--    </style>--}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">

                    <tr>
                        <td>Id</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Picture</td>
                        <td>Categary</td>
                        <td>Delete</td>
                    </tr>
                    <tbody>
                    @foreach($ad_product as $x)
                        <tr>
                            <td>
                                {{ $x->id }}
                            </td>
                            <td>
                                {{ $x->proName }}
                            </td>
                            <td>
                                {{ $x->price }}
                            </td>
                            <td>
                                {{ $x->pic }}
                            </td>
                            <td>
                                {{ $x->categary }}
                            </td>

                            <td>
                                <a href="/deletProduct/{{ $x->id }}" ><span class="fa fa-trash" style="color:red;
                               font-size:25px">

                                   </span></a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>


@endsection
