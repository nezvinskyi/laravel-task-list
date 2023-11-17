@extends('layouts.app')

@section('title')

<h1>Task list</h1>
@endsection

    <!-- @if (count($tasks))
        @foreach($tasks as $task)
        <div>{{ $task->title}}</div>
        @endforeach
        @else
        <div>there are no tasks</div>
        @endif -->

@section('content')
<div class="">
    <a href="{{ route('tasks.create') }}"> Create a task</a>
</div>
    @forelse ($tasks as $task)
        <div class="">
            <a href={{ route('tasks.show', ['task'=>$task->id]) }}>
            {{$task->title}}
            </a>
        </div>
    @empty
        <div class="">no task name</div> 
    @endforelse

    @if($tasks->count())
    <nav>
        {{ $tasks->links() }}
    </nav>
    @endif
@endsection
