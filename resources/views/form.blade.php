@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message{
            color: red;
            font-size: .85rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value={{ $task->title ?? old('title') }} >
            @error('title')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>       
            
            @error('description')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="long_description">Long Description</label>
            <textarea type="text" name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>       
            @error('long_description')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>

        <div class="">
            <button type="submit">{{ isset($task) ? 'Update Task' : 'Add task' }}</button>
        </div>

    </form>
@endsection