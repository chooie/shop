{{-- TODO: Make this pretty --}}
<div class="thumbnail">
    <img src={{ $product->image_path }} alt="">
    <div class="caption">
        <h4 class="pull-right">&#8364;{{ $product->price }}</h4>
        <h4>{{ link_to_route('products.show', $product->name, $product->id) }}</h4>
        <p>Short description about the product. This antique is the bomb!</p>
    </div>
    <div class="ratings">
        <p>Sold by {{ link_to_route('users.show', $product->user()->first()->username,
            $product->user()->first()->username) }}</p>
    </div>
</div>