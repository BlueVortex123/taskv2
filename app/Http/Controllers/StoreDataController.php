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

   
}
