@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message{
            color: red;
            font-size: .85rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div class="">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value={{ $task->title }}>
            @error('title')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" rows="5">{{ $task->description }}</textarea>       @error('description')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="long_description">Description</label>
            <textarea type="text" name="long_description" id="long_description" rows="10">{{ $task->long_description }}</textarea>       
            @error('long_description')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>

        <div class="">
            <button type="submit">Edit task</button>
        </div>

    </form>
@endsection