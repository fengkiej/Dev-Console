<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminGroupsController extends Controller
{
    public function index()
    {
        return view('admin.groups');
    }

    /**
     * Group Permission
     *
     * @return View to edit usergroup permission
     */
    public function groupsPermissionsView()
    {
        return view('admin.groups_permissions');
    }
}

