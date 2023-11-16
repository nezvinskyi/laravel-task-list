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
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            @error('title')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" rows="5"></textarea>       @error('description')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <label for="long_description">Description</label>
            <textarea type="text" name="long_description" id="long_description" rows="10"></textarea>       
            @error('long_description')
                <p class='error-message'>{{ $message }}</p>
            @enderror
        </div>

        <div class="">
            <button type="submit">Add task</button>
        </div>

    </form>
@endsection