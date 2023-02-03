<!-- app/resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form action="{{ route('tasks.store') }}" method="POST">
  @csrf
  <div>
      <input type="text" name="name" placeholder="Task name">
  </div>
  <button type="submit">Add Task</button>
</form>
@endsection