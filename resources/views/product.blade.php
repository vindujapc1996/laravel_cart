
@extends('userdashboard')
@section('content')
    @foreach($pro as $pros)
    <div class="card w-40 my-3 mx-2"  style="width: 16rem;">
  
  <div class="card-body" style="background-color:yellow;">
   name: <strong><i style="color:green">{{$pros->product_name}}</i> </strong><br>
    price:<strong><i style="color:green">{{$pros->price}}</i></strong><br>
   detail: <strong><i style="color:green">{{$pros->product_description}}</i></strong><br>
    <br>
    <a href="{{ route('add.cart', $pros->product_id) }}" class="btn btn-primary">add to cart</a> 
  </div>
</div>
</form> 
@endforeach
@endsection