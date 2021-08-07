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

        return redirect()->route('users.add');

    }
}
