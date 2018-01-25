<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Skill;
use App\Http\Requests\SkillRequest;
use App\Models\Training;
use App\Http\Requests\TrainingRequest;

class FrontHomeController extends Controller
{

    public function index(){
    	$annee = intval(Carbon::now()->format('Y'));
    	$annee = $annee - 1997;

    	$skills = Skill::all();
    	$trainings = Training::all();
    	return view('welcome', compact('annee','skills','trainings'));
    }
}
