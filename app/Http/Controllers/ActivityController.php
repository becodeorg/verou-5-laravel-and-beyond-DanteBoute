<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActivityController extends Controller
{
    public function home()
    {
        return view("home");
    }
    
    public function index()
    {
        $activity = Activity::all();

        return view("activity/activities", [
            "activities" => $activity,
        ]);
    }

    public function show ($id)
    {
        $activity = Activity::find($id);
        
        return view ("activity/activity", [
            "activity" => $activity,
        ]);
    }

    public function create(){
        return view('activity/new_activity');
    }

    public function store(Request $new_activity){
        Activity::create($new_activity->all());
        
        return $this->index();
    }
}