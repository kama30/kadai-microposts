@extends('layouts.app')

@section('content')
        <div class="row">
            <aside class="col-sm-4">
                @include('users.card', ['user' => Auth::user()])
            </aside>
            <div class="col-sm-8">
                <div>
                    <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                </div>
                {!! Form::model($micropost, ['route' => ['microposts.update', $micropost->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                        {!! Form::submit('Edit', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
                
                {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
@endsection