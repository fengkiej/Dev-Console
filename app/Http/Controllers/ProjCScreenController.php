<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjCScreenController extends Controller
{
    /**
     * Create Project
     *
     * @return View to create a new project
     */
    public function index()
    {
        return view('projectconsent');
    }
}
