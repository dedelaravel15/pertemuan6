<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::getAll();
        return view('task/index', [
            'tasks' => $tasks,
        ]);
    }
    public function show($id)
    {
        $task = Task::getById();
        return view('task.detail', [
            'task' => $task
        ]);
    }
}
