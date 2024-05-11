@extends("Admin_zone.AdminMaster")
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <h1>Add Product</h1>
                <form action="/CartSave/" method="post" enctype="multipart/form-data">
                    @csrf
                    <span>Product Name</span>
                    <br/>
                    <input type="text" class="form-control" name="proName">
                    <br/><br/>
                    <span>Price</span><br/>
                    <input type="text" class="form-control" name="price"/><br/><br/>
                    <span>Picture</span><br/>
                    <input type="file" class="form-control" name="pic"/>
                    <br/><br/>
                    <span>Categary</span>
                    <select class="form-control" name="categary">
                        <option>Select</option>
                        <option>Women</option>
                        <option>Women1</option>
                        <option>Men</option>
                        <option>Boys</option>
                        <option>Girls</option>
                        <option>Laptop1</option>
                        <option>Laptop2</option>
                        <option>Laptop3</option>
                        <option>Keyboard</option>
                        <option>Mouse</option>
                        <option>shoes</option>
                        <option>Juti</option>
                        <option>Suit</option>
                        <option>Toys</option>
                        <option></option>
                    </select>
                    <br/><br/>
                    <button class="btn btn-info ">Add to Cart</button>

                </form>
            </div>
            <div class="col-2">

            </div>
        </div>


    </div>





@endsection

