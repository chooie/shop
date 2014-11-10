{{ HTML::style('css/boostrap.min.css') }}
<div class="container">
    <div style="text-align: center">
        <h1>Test Error Page! 404 Error!</h1>
        {{ link_to_route('home', 'Go home', null, ['style' => 'btn btn-success']) }}
    </div>
</div>