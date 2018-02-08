@extends('init')

@section('content')

<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($boards as $board)
                <tr>
                    <th scope="row">{{ $board->id }}</th>
                    <td>{{ $board->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="text-center">{{ $boards->links() }}</div>
    
@endsection