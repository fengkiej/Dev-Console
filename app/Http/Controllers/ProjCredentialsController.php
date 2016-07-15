<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjCredentialsController extends Controller
{
    /**
     * Project Crdentials
     *
     * @return View of project credentials page
     */
    public function index()
    {
        return view('projectcredentials');
    }

    /**
     * Create API key 
     *
     * @return View to select API type
     */
    public function createApiView()
    {
        return view('createapi');
    }
}
