<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUsersController extends Controller
{
    public function index()
    {
        return view('admin.users');
    }

    /**
     * User detail
     *
     * @return View to show user detail
     */
    public function usersDetailView()
    {
    	return view('admin.users_detail');
    }
}
