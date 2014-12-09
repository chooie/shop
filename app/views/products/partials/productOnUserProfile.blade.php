{{-- TODO: Make this pretty --}}
<div class="thumbnail">
    {{ HTML::image(Image::url($product->image_path,350,150, ['crop']),'Product Image', null) }}
    <div class="caption">
        <h4 class="pull-right">&#8364;{{ $product->price }}</h4>
        <h4>{{ link_to_route('products.show', $product->name, $product->id) }}</h4>
        <p>Short description about the product. This antique is the bomb!</p>
    </div>
    <div class="ratings">
        <p>Last Activity: {{ $product->updated_at }}</p>
        <p>Posted on: {{ $product->created_at }}</p>
    </div>
</div>