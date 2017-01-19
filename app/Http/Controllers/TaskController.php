<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'rank' => 'required|max:255',
            'listrank' => 'required|max:255',
            'list' => 'required|max:255',
            'board' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'rank' => $request->rank,
            'listrank' => $request->listrank,
            'description' => $request->description ,
            'list' => $request->list ,
            'board' => $request->board ,
        ]);


        return redirect('/tasks');
    }

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
    public function updesc(Request $request, Task $task)
    {

        $task->update([
            'description' => $request->description ,
        ]);

        return redirect('/tasks');


    }
    public function uplist(Request $request, Task $task)
    {

        foreach ($this->tasks->forUser($request->user()) as $x) {

            if($x->list == $task->list) {
                $x->update([
                    'list' => $request->list ,
                ]);
            }
        }



        return redirect('/tasks');


    }
    public function uprank(Request $request, Task $task)
    {

        $task->update([
            'rank' => $request->rank ,
        ]);

        return redirect('/tasks');


    }
    public function uplistrank(Request $request, Task $task)
    {

        foreach ($this->tasks->forUser($request->user()) as $x) {

            if($x->list == $task->list) {
                $x->update([
                    'listrank' => $request->listrank,
                ]);
            }
        }



        return redirect('/tasks');


    }
}
