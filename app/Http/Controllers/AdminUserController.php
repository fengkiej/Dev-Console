<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user');
    }
}
