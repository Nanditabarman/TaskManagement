@extends('layouts.app')

@section('main')

  <div class="d-flex justify-content-between pb-4">
    <h1>Submitted Tasks</h1>
    <button type="submit" class="btn btn-danger "><a href="tasks/create" class="text-light text-decoration-none">Create Task</a></button>
 </div>
    <table class="table table-bordered">
         @if(session('success'))
            <div class="alert alert-success">
             {{ session('success') }}
            </div>
            @endif
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Assigned By</th>
                <th>Assigned To</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr class="table-light">
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->deadline }}</td>
                <td>{{ $task->status_id }}</td>
                <td>{{ $task->assinged_by }}</td>
                <td>{{ $task->assigned_to }}</td>
                <td>
                    <a href="tasks/{{$task->id }}/show" class="btn btn-sm btn-info">View</a>
                    <a href="tasks/{{ $task->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                 <form method="POST" class="d-inline" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                  @csrf
                  @method('DELETE')
                   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                 </form>
               </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection



