@extends('layouts.app')
@section('content')
<form action="{{ route('boards.update', ['board'=>$board->id, 'page'=>$page]) }}" method="POST">
        @csrf
        @method('patch')
        <label for="">
            제목
            <input type="text" name="title" value="{{ $board->title }}">
            <span>
                @if ($errors->has('title'))
                   {{ $errors->first('title') }} 
                @endif
            </span>
        </label>
        <br>
        <label for="">
            내용
            <textarea name="content">{{ $board->content }}</textarea>
            <span>
                @if ($errors->has('content'))
                    {{ $errors->first('content') }}
                @endif
            </span>
        </label>
        <br>
        <button class="btn btn-primary">Edit</button>
    </form>
@endsection