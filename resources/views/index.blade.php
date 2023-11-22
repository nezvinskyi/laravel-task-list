@extends('layouts.app')

@section('title')
Task list
@endsection

    <!-- @if (count($tasks))
        @foreach($tasks as $task)
        <div>{{ $task->title}}</div>
        @endforeach
        @else
        <div>there are no tasks</div>
        @endif -->

@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="font-medium text-gray-700 underline decoration-pink-500"> Create a task</a>
</nav>
    @forelse ($tasks as $task)
        <div class="">
            <a href="{{ route('tasks.show', ['task'=>$task->id]) }}" @class(['line-through'=> $task->completed ])>
            {{$task->title}}
            </a>
        </div>
    @empty
        <div class="">no task name</div> 
    @endforelse

    @if($tasks->count())
    <nav class="mb-4">
        {{ $tasks->links() }}
    </nav>
    @endif
@endsection
