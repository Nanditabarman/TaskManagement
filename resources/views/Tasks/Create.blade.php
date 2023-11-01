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
                <input type="text" name="title" id="title" class="form-control" value="{{old ('title') }}" required>
                @if($errors->has('title'))
               <p class="text-danger">{{ $errors->first('title') }}</p>
              @endif
            </div>

            <div class="form-group">
                <label for="description">Task Description:</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{old ('description') }}</textarea>
                @if($errors->has('description'))
               <p class="text-danger">{{ $errors->first('description') }}</p>
              @endif
            </div>

            <div class="form-group">
               <label for="deadline">Deadline:</label>
               <input type="date" name="deadline" id="deadline" class="form-control" value="{{old ('deadline') }}" required>
               @if($errors->has('deadline'))
               <p class="text-danger">{{ $errors->first('deadline') }}</p>
              @endif
            </div>

            <div class="form-group">
              <label for="status_id">Status:</label>
            <select name="status_id" id="status_id" class="form-control" required>
                <option value="" disabled>Select a status</option>
                <option value="pending" {{ old('status_id') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ old('status_id') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ old('status_id') == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
               @if($errors->has('status_id'))
             <p class="text-danger">{{ $errors->first('status_id') }}</p>
               @endif
             </div>

            <div class="form-group">
                <label for="assinged_by">Assigned By:</label>
                <input type="text" name="assinged_by" id="assinged_by" class="form-control" value="{{old ('assinged_by') }}" required>
                @if($errors->has('assinged_by'))
               <p class="text-danger">{{ $errors->first('assinged_by') }}</p>
              @endif
            </div>

            <div class="form-group">
                <label for="assigned_to">Assigned To:</label>
                <select name="assigned_to" id="assigned_to" class="form-control" required>
           @foreach ($users as $user)
               <option value="{{ $user->id }}">{{ $user->name }}</option>
           @endforeach
              </select>
           @if($errors->has('assigned_to'))
              <p class="text-danger">{{ $errors->first('assigned_to') }}</p>
           @endif
</div>


               <button type="submit" class="btn btn-primary mt-3">Create Task</button>
        </form>
@endsection

