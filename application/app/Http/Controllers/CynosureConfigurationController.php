<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CynosureConfigurationController extends Controller
{
    /**
     * Display the main Cynosure Configuration Dash
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('system.cynosure_settings.configuration');
    }
}
