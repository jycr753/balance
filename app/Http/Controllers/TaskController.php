<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Auth::user()->task();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return array|Response
     */
    public function store(Request $request)
    {

        $attr = $request->validate([
            'type_id' => 'required',
            'content' => 'required'
        ]);

        $task = Task::create(['user_id' => Auth::user()->id] + $attr);

        if (request()->expectsJson()) {
            return [$task, 'message'=>__('general.note-added')];
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Task $task
     * @return Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return Response
     */
    public function destroy()
    {
        $task = Task::find(request('id'));
        $task->delete();
        if (request()->expectsJson()) {
            return 'הפתק נמחק בהצלחה';
        }
        return "nothing here";
    }
}
