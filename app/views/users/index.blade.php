@extends('layouts.default')

<div class="container" style="margin-top: 60px">
@section('content')
    @foreach ($users->chunk(4) as $userSet)
        <div class="row users">
            @foreach ($userSet as $user)
                <div class="col-md-3 user-block">
                    {{-- @include('users.partials.avatar', ['size' => 70]) --}}

                    <h4 class="user-block-username">
                        {{ link_to_route('users.show', $user->username, $user->username) }}
                    </h4>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
{{ $users->links() }}
@stop