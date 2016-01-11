<?php

namespace App\Http\Controllers;

use App\Commands\DestroyTaskCommand;
use App\Commands\StoreTaskCommand;
use App\Commands\UpdateTaskCommand;
use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\HttpCache\Store;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        $heading = 'My tasks';
        return view('tasks', array('tasks' => $tasks, 'heading' => $heading));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        // Get input
        $name = $request->input('name');

        // Instantiates Command
        $command = new StoreTaskCommand($name);

        // Runs command
        $this->dispatch($command);

        return \Redirect::route('task.index')->with('flash_message', 'Task Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('show', array('task' => $task));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('edit', array('task' => $task));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Get input
        $name = $request->input('name');

        // Instantiates Command
        $command = new UpdateTaskCommand($id, $name);

        // Runs command
        $this->dispatch($command);

        return \Redirect::route('task.index')->with('flash_message', 'Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Instantiates Command
        $command = new DestroyTaskCommand($id);

        // Runs command
        $this->dispatch($command);

        return \Redirect::route('task.index')->with('flash_message', 'Task Removed');
    }
}
