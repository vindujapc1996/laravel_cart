

@extends('userdashboard')
@section('content')
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@foreach($cart as $carts)
    <div class="card w-50 my-3" style="width:18rem">
  <div class="card-body">
 
    <strong>{{ $carts->product_name }}    </strong><br>
    <strong> {{ $carts->product_description }}</strong><br>
    <strong> {{ $carts->price }} </strong><br>
<a href="" class="btn btn-primary">pay</a>
 
  </div>
</div>
@endforeach

@endsection