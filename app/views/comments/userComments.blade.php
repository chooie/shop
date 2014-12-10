@forelse($comments as $comment)
	@include('comments.partials.userComment')
@empty
	<p>No comments have been posted about this user yet.</p>
@endforelse