@extends('product.layout')

@section('content')
<div class="container col-10">
  
  @if( Session::get('success') != NULL )
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
    </div>
  @endif 
  <table class="table">
    <thead class="table-success">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col" style="width:400px; 
                              text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
      @php
          $i = 0;
      @endphp
      @foreach ($products as $item)
      <tr>
        <th scope="row">{{$i++;}}</th>
        <td>{{$item->label}}</td>
        <td>{{$item->price}} DZD</td>
        <td>
          <div class="row justify-content-center">
            <div class="col-2">
              <a href="{{route('product.show',$item)}}" class="btn btn-sm btn-success">Detail</a>
            </div>
            <div class="col-2">
              <a href="{{route('product.edit',$item)}}" class="btn btn-sm btn-primary">Edit</a>
            </div>
            <div class="col-2">
              <a>
                <form action="{{route('product.destroy',$item)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                </form>
              </a>
            </div>
          </div>
          {{-- <div class="row justify-content-center ">
            <div class="col">
              <a href="{{route('product.show',$item)}}" class="btn btn-success">Detail</a>
            </div>
            <div class="col">
              <a href="{{route('product.edit',$item)}}" class="btn btn-primary">edit</a>
            </div>
            <div class="col">
              <form action="{{route('product.destroy',$item->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete </button>
    
              </form>
            </div>
          </div>
           --}}
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
    {{-- {{ $products->links() }} --}}
</div>

@endsection