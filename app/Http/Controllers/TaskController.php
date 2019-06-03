<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //* Create a controller instance
    public function __construct()
    {
        $this->middleware('auth');
    }


    // Display list of task
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('home', compact('tasks'));
    }

    // Create New task
    public function create(Request $request)
    {
        $task = new Task;
        $task->user_id = Auth::id();
        $task->title = $request->title;
        $task->completed = 0;

        $task->save();

        return redirect('/tasks');
    }


    public function completed($id)
    {
        $task = Task::find($id);
        $task->completed = 1;
        $task->save();

        return redirect('/tasks');
    }


    //* Edit task
    public function  edit($id)
    {
        $task = Task::findOrFail($id);

        return view('edit')->withTask($task);
    }


    // update edited task
    public function update($id, Request $request)
    {

        $task = Task::find($id);
        $task->title = $request->get('title');
        $task->save();

        return redirect('/tasks');
    }


    // Delete task
    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }
}
