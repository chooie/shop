@forelse($comments as $comment)
	@include('comments.partials.productComment')
@empty
	<p>No comments have been posted about this product yet.</p>
@endforelse