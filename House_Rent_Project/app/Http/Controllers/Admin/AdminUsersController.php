<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view("admin.pages.user.list")->with('users', $data);
    }
    public function create()
    {
        return view("admin.pages.user.register");
    }
}
