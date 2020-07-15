<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        return view('users.show');
    }

    public function destroy()
    {
        return view('users.destroy');
    }
}
