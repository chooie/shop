{{-- TODO: Make this pretty --}}
<li>{{ $product->name}}
    <ul>
        <li>{{ $product->price }}</li>
        <li>Posted at: {{ $product->created_at }}</li>
        <li>Updated at: {{ $product->updated_at }}</li>
        <li>Last Activity: {{ $product->user()->first()->username }}</li>
    </ul>
</li>