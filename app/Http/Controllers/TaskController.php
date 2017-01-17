<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
=======
use App\Task;
use App\Http\Controllers\Controller;
>>>>>>> 27ec49379f8115f342fba397bfdb04ea49935531
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
<<<<<<< HEAD
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
=======

    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }




    public function index(Request $request)
    {
        return view('dashboard',[
            'tasks' => $this->tasks->forUser($request->user())
        ]);
    }




>>>>>>> 27ec49379f8115f342fba397bfdb04ea49935531
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

<<<<<<< HEAD
        $request->user()->tasks()->create([
            'name' => $request->name,
            'description' => $request->description ,
=======
        // Create The Task...
        $request->user()->tasks()->create([
            'name' => $request->name,
>>>>>>> 27ec49379f8115f342fba397bfdb04ea49935531
        ]);

        return redirect('/tasks');
    }

<<<<<<< HEAD
    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
    public function nulldesc(Request $request, Task $task)
    {


        $task->description="" ;
        $task->save() ;

        return redirect('/tasks');
    }
=======

>>>>>>> 27ec49379f8115f342fba397bfdb04ea49935531
}