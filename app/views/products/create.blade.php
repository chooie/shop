@extends('layouts.default')

@section('content')
<div class="listings" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-6">
            <h1>Post your Product!</h1>

            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'products.store', 'files' => true]) }}
                <div class="form-group">
                    {{ Form::label('name', 'Product name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('price', 'Price') }}
                    {{ Form::text('price', null, ['class' => 'form-control',
                                                  'type' => 'number',
                                                  'min' => '0']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('fileName', 'Upload Product Image:') }}
                    {{ Form::file('fileName') }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Post Product', ['class' => 'btn btn-success']) }}
                </div>
            {{ Form::close() }}
        <div>
    </div>
</div>
@stop