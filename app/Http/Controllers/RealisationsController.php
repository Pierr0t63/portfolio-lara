<?php

namespace App\Http\Controllers;

use App\Models\Project;
use  App\Http\Controllers\ProjectController;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

class RealisationsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $projects = Project::all();
        return view('realisations',compact ('projects'));
    }
}
