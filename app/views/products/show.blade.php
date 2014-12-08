@extends('layouts.default')

{{-- Home page about a particular product --}}
@section('content')
    <li>{{ $product->name}}
        <ul>
            <li>{{ $product->price }}</li>
            <li>Posted at: {{ $product->created_at }}</li>
            <li>Updated at: {{ $product->updated_at }}</li>
            <li>Posted By: {{ $product->user()->first()->username }}</li>
        </ul>
    </li>
    @if ($currentUser && $currentUser->username == $product->user()->first()->username)
        {{ Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) }}
                    <div class="form-group">
                        {{ Form::submit('Cancel Listing', ['class' => 'btn btn-danger']) }}
                    </div>
        {{ Form::close() }}
    @else
        {{ Form::open(['route' => ['products_purchase', $product->id]]) }}
                    <div class="form-group">
                        {{ Form::submit('Purchase Product', ['class' => 'btn btn-success']) }}
                    </div>
        {{ Form::close() }}
    @endif
@stop