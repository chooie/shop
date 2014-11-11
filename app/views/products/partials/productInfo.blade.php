{{-- TODO: Make this pretty --}}
<li>{{ $product->name}}
    <ul>
        <li>Price: {{ $product->price }}</li>
        <li>First Posted: {{ $product->created_at }}</li>
        <li>Recent Activity: {{ $product->updated_at }}</li>
        <li>Sold by: {{ $product->user()->first()->username }}</li>
    </ul>
</li>