@extends('init')

@section('content')

    @foreach ($errors->all() as $error)
        <p class="error">{{ $error }}</p>
    @endforeach

    <form method="post" action="{{route('board.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <button type="submit" class="btn btn-primary">save</button>
    </form>
    
@endsection