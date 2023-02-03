<!-- app/resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Task')

@section('content')

<table class="table table-striped">
    <thead>
        <th>Task Name</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('tasks.create') }}">Add Task</a>
@endsection
