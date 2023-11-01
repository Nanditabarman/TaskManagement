<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Status;
use App\Models\User;

class Taskcontroller extends Controller
{
    public function index(){
        $tasks = Task::all(); // Fetch all tasks from the database
        return view('tasks.store', compact( 'tasks'));
    }


    public function create(){
        $users = User::all(); // Retrieve all registered users
        return view('tasks.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required',
            'deadline' => 'required|date|after_or_equal:today', // Ensure it's not after today
            'status_id' => 'required',
            'assinged_by' => 'required',
            'assigned_to' => 'required',
        ];

        // Define custom validation messages
        $messages = [
            'deadline.after_or_equal' => 'The deadline must be today or a date after today.',
        ];

        // Validate the request data
        $request->validate($rules, $messages);

        // If validation passes, create the task
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status_id' => $request->status_id,
            'assinged_by' => $request->assinged_by,
            'assigned_to' => $request->assigned_to,
        ]);

        return redirect()->route('tasks.create')->with('success', 'Task created successfully');
    }


    public function edit($id){

        $task = task::where('id',$id)->first(); //use first method for get all data
        return view('tasks.edit',['task' => $task]);

        // $task = Task::find($id);
        // return view('tasks.edit', ['task' => $task]);

}

public function update(Request $request, $id)
{
    // Retrieve the task by its ID
    $task = Task::find($id);

    // Update the task's attributes
    $task->title = $request->title;
    $task->description = $request->description;
    $task->deadline = $request->deadline;
    $task->status_id = $request->status_id;
    $task->assinged_by = $request->assinged_by;
    $task->assigned_to = $request->assigned_to;


    $task->save();

    return back()->with( 'success','Task Updated successfully');
}


    public function destroy(Task $task)
    {
        $task->delete();

        return back()->with('success', 'Task Deleted successfully');
    }

    public function show($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }

        return view('tasks.show', ['task' => $task]);
    }

}
