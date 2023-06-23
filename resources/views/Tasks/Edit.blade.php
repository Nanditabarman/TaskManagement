@extends('layouts.app')

@section('main')

    @if (session('success'))
    <div class="alert alert-success mb-5">
        {{ session('success') }}
    </div>
@endif
        <h1 class="mt-5">Edit Task ID={{$task->id}}</h1>
        <form method="POST" action="/tasks/{{ $task->id }}/update">
            @csrf <!-- CSRF token field -->
          @method('PUT')
            <div class="form-group mt-3">
                <label for="title">Task Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Task Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ $task->description }}</textarea>
           </div>
           <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="datetime-local" name="deadline" id="deadline" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($task->deadline)) }}" required>
          </div>
          <div class="form-group">
              <label for="status_id">Status:</label>
              <select name="status_id" id="status_id" class="form-control" required>
                  <option value="pending" {{ $task->status_id === 'pending' ? 'selected' : '' }}>Pending</option>
                  <option value="in_progress" {{ $task->status_id === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                  <option value="completed" {{ $task->status_id === 'completed' ? 'selected' : '' }}>Completed</option>
             </select>
          </div>
            <div class="form-group">
                <label for="assinged_by">Assigned By:</label>
                <input type="text" name="assinged_by" id="assinged_by" class="form-control" value="{{ $task->assinged_by }}" required>
            </div>

            <div class="form-group">
                <label for="assigned_to">Assigned To:</label>
                <input type="text" name="assigned_to" id="assigned_to" class="form-control" value="{{ $task->assigned_to }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Edit Task</button>
            <button type="submit" class="btn btn-success "><a href="/" class="btn btn-success text-light text-decoration-none">GO To Table</a>
         </button>
        </form>
        @endsection


