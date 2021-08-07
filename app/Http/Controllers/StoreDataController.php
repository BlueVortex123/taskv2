<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Task;

class StoreDataController extends Controller
{
    public function AddUser()
    {
        return view('users.add_users');
    }

    public function StoreUser(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('tasks.view');

    }

    public function ViewTasks()
    {
        $data['tasks'] = Task::all();
        $data['users'] = User::all();
        return view('tasks.view_tasks',$data);
    }

    public function AddTasks()
    {
        $data['users'] = User::all();
        return view('tasks.add_tasks', $data);
    }

    public function StoreTasks(Request $request)
    {
        $validateData = $request->validate([
            'deadline' => 'required',
        ]);
        $task = new Task();
        $task->user_id = $request->user_id;
        // $task->status = isset($request->status)? 0 : 1;
        $task->status = $request->input('status') ? true : false;

        $task->deadline = $request->deadline;
        $task->save();

        return redirect()->route('tasks.view');
    }

    public function EditTasks($id)
    {
        $data['task'] = Task::find($id);
        $data['editUser'] = Task::with('users')->where('id', $id)->get();
        $data['users'] = User::all();

        // dd($data);
        return view('tasks.edit_tasks', $data);
    }

    public function UpdateTasks(Request $request, $id)
    {

        $task = Task::find($id);
        $task->user_id = $request->user_id;
        // $task->status = isset($request->status)? 0 : 1;

        $task->status = $request->input('status') ? true : false;
        $task->deadline = $request->deadline;
        $task->save();

        return redirect()->route('tasks.view');
    }

   
}
