<!-- app/resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<form action="{{ route('tasks.update', $task) }}" method="POST">
  @method('PUT')
  @csrf
  <div>
      <input type="text" name="name" placeholder="Task name" value="{{ $task->name }}">
  </div>
  <button type="submit">Save Changes</button>
</form>
@endsection