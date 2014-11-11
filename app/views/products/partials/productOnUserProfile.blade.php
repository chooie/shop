{{-- TODO: Make this pretty --}}
<li>{{ $product->name}}
    <ul>
        <li>Price: {{ $product->price }}</li>
        <li>First Posted: {{ $product->created_at }}</li>
        <li>Recent Activity: {{ $product->updated_at }}</li>
    </ul>
</li>