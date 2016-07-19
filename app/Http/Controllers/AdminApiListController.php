<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminApiListController extends Controller
{
    public function index()
    {
        return view('admin.api_list');
    }
}
