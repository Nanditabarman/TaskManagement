@extends('layouts.app')

@section('main')
    <div class="d-flex justify-content-between pb-4">
        <h1>Task Details</h1>
        <button type="submit" class="btn btn-success "><a href="/" class="btn btn-success text-light text-decoration-none">GO To Table</a>
         </button>
     </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $task->title }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $task->description }}</p>
                <p class="card-text"><strong>Deadline:</strong> {{ $task->deadline }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $task->status_id }}</p>
                <p class="card-text"><strong>Assigned By:</strong> {{ $task->assinged_by }}</p>
                <p class="card-text"><strong>Assigned To:</strong> {{ $task->assigned_to }}</p>
            </div>
        </div>
@endsection
