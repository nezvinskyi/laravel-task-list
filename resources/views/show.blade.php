@extends('layouts.app')

@section('title')
<h1>{{ $task->title }}</h1>
@endsection

@section('content')
    <p> {{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p> 
    <p>{{ $task->completed ? 'Completed' : 'Not completed' }}</p>

    <div class="">
        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>

        </form>
    </div>

    <div class="">
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task ]) }}">
            @csrf
            @method('PUT')
            <button type="submit">Mark as {{ $task->completed ? 'not completed' : 'completed' }}</button>
        </form>
    </div>

    <div class="">
        <a href="{{ route('tasks.edit', ['task'=>$task]) }}">Edit</a>
    </div>

    <div class="">
        <a href="{{route('tasks.index')}}">All tasks</a>
    </div>
@endsection