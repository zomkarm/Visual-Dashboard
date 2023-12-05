<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Shows the dashboard webpage
     */
    public function index(){
        return view('pages.index');
    }
}
