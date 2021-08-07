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
}
