<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjSettingsController extends Controller
{
     /**
     * Project Settings 
     *
     * @return Response
     */
    public function index()
    {
        return view('projectsettings');
    }
}
