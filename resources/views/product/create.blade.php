@extends('product.layout')

@section('content')
    <div class="container col-5">

        <form action="{{route('product.store')}}" method="POST">
        @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product label :</label>
              <input type="text" class="form-control" name='label'>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Price :</label>
              <input type="number" class="form-control" name='price'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Detail :</label>
                <textarea type="text" class="form-control" name='detail' rows="5"> </textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection