<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activity = Activity::all();

        return view("activities", [
            "activities" => $activity,
        ]);
    }
    public function show ($id)
    {
        $activity = Activity::find($id);
        
        return view ("activity", [
            "activity" => $activity,
        ]);
    }
}
