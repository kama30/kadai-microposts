@if (Auth::user()->has_favorited($micropost->id))
    {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm mr-1"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['users.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm mr-1"]) !!}
    {!! Form::close() !!}
@endif