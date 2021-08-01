@extends('product.layout')

@section('content')
    <div class="container col-5">

        <form action="{{route('product.update',$product)}}" method="POST">
        {{-- <form action="" method="POST"> --}}
        @csrf
        @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product label :</label>
              <input type="text" class="form-control" value="{{$product->label}}" name='label'>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Price :</label>
              <input type="number" class="form-control" value="{{$product->price}}" name='price'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Detail :</label>
                <textarea type="text" class="form-control" name='detail' rows="5"> {!!$product->detail!!} </textarea>
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection