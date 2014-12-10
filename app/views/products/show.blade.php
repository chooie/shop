@extends('layouts.default')

{{-- Home page about a particular product --}}
@section('content')
    <h1>{{ $product->name}}</h1>
 
<div class="row">  
    <div class='productImage col-lg-6 row' >
        {{ HTML::image(Image::url($product->image_path,1050,350, ['']),'Product Image', null) }}
    </div>

    
     <ul class ='productInfo col-sm-4'>
            <li style="color:#990000;">Product Information:</li>
            <li>Posted at: {{ $product->created_at }}</li>
            <li>Updated at: {{ $product->updated_at }}</li>
            <li>Posted By: {{ $product->user()->first()->username }}</li>
    </ul>
</div> 

 <div class= "row">
        €{{ $product->price }}
</div>
   
    
   
    @if ($currentUser && $currentUser->username == $product->user()->first()->username)
        {{ Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) }}
                    <div class="form-group row">
                        {{ Form::submit('Cancel Listing', ['class' => 'btn btn-danger']) }}
                    </div>
        {{ Form::close() }}
    @else
        {{ Form::open(['route' => ['products_purchase', $product->id]]) }}
                    <div class="form-group row">
                        {{ Form::submit('Purchase Product', ['class' => 'btn btn-success']) }}
                    </div>
        {{ Form::close() }}
    @endif
    
@stop
