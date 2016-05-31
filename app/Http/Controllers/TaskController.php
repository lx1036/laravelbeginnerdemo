<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * @var TaskRepository
     */
    protected $tasks;

    public function __construct(TaskRepository $taskRepository)
    {
        //
        $this->middleware('auth');
        $this->tasks = $taskRepository;
    }

    public function index(Request $request)
    {
        $tasks = $this->tasks->forUser($request->user());
//        $tasks = Task::where('user_id', $request->user()->id)->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        //create new task
        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        //authorization to 'destroy' a $task
        $this->authorize('destroy', $task);

        //delete task
        $task->delete();
        return redirect('/tasks');
    }
}
