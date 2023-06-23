@extends('layouts.app')

@section('main')

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

       <div class="d-flex justify-content-between pb-4">
        <h1>Create New Task</h1>
        <button type="submit" class="btn btn-success "><a href="/" class="btn btn-success text-light text-decoration-none">GO To Table</a>
         </button>
       </div>
       <form method="POST" action="{{ route('tasks.store') }}">
            @csrf <!-- CSRF token field -->

            <div class="form-group mt-3">
                <label for="title">Task Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Task Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="datetime-local" name="deadline" id="deadline" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status_id">Status:</label>
                <select name="status_id" id="status_id" class="form-control" required>
                    <option value="" disabled selected>Select a status</option>
                       <option value="pending">Pending</option>
                      <option value="in_progress">In Progress</option>
                   <option value="completed">Completed</option>
               </select>
            </div>

            <div class="form-group">
                <label for="assinged_by">Assigned By:</label>
                <input type="text" name="assinged_by" id="assinged_by" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="assigned_to">Assigned To:</label>
                <input type="text" name="assigned_to" id="assigned_to" class="form-control" required>
            </div>

               <button type="submit" class="btn btn-primary mt-3">Create Task</button>
        </form>
@endsection

