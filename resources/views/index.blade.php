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
    @forelse ($tasks as $task)
        <div class="">
            <a href={{ route('tasks.show', ['task'=>$task->id]) }}>
            {{$task->title}}
            </a>
        </div>
    @empty
        <div class="">no task name</div> 
    @endforelse
@endsection
