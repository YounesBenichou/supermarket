@extends('product.layout')

@section('content')
    <div class="container col-5">

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product label :</label>
              <input type="text" class="form-control" value="{{$product->label}}" name='label' readonly>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Price :</label>
              <input type="number" class="form-control" value="{{$product->price}}" name='price' readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Detail :</label>
                <textarea type="text" class="form-control" name='detail' rows="5" readonly> {!!$product->detail!!} </textarea>
            </div>
    </div>
@endsection