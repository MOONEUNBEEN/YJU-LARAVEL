@extends('layouts.app')

@section('content')
<table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Writer</th>
            <th>Hits</th>
        </tr>
    @foreach ($msgs as $msg)
        <tr>
            <td>
                <a href="{{ route('boards.show', ['board'=>$msg->id, 'page'=>$page]) }}">
                    {{ $msg->title }}
                </a>
            </td>
            <td>{{ $msg->user->name }}</td>
            <td>{{ $msg->hits }}</td>
        </tr>
    @endforeach
</table>
<button class="btn btn-primary" onclick="location.href='{{ route('boards.create') }}'">Write</button>
<button class="btn btn-primary" onclick="location.href='myArticles'">My Articles</button>
{{ $msgs->links() }}
@endsection