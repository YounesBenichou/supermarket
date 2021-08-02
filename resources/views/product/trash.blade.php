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
            
            <div class="col-2" style="margin-right: 30px;">
              <a href="{{route('product.back',$item->id)}}" class="btn btn-sm btn-primary">Restore</a>
            </div>
            <div class="col-2" >
              <a href="{{route('force.delete',$item->id)}}" class="btn btn-sm btn-danger" style="width: 100px;">Force Delete</a>
            </div>
            
          </div>
         
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
    {{-- {{ $products->links() }} --}}
</div>

@endsection