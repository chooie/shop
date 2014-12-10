@extends('layouts.default')

{{-- Home page about a particular product --}}
@section('content')
    @include('layouts.partials.errors')
    <h1>{{ $product->name}}</h1>
 
<div class="row">  
    <div class='productImage col-lg-6 row' >
        {{ HTML::image(Image::url($product->image_path,350,250, ['crop']),'Product Image', null) }}
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

@include('comments.productComments')

@if ($signedIn)
    {{ Form::open(['route' => ['product_comment_path'], 'class' => 'comments__create-form']) }}
        {{ Form::hidden('product_id', $product->id) }}
        {{ Form::hidden('commenter_id', $currentUser->id) }}

        <!-- Body Form Input -->
        <div class="form-group">
            {{ Form::textarea('body', null,
                ['class' => 'form-control', 'rows' => 1, 'placeholder' => 'Leave a comment...']) }}
        </div>
    {{ Form::close() }}
@endif
    
@stop
