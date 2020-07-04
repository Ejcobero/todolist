<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'task' => 'required',
        ]);

        Task::create($data);

        return redirect('/');
    }

    public function delete($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect('/');
    }
}
