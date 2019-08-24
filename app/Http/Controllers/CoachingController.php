<?php

namespace App\Http\Controllers;

use App\Coach;
use App\Http\Requests\coachReqeust;
use Illuminate\Http\Request;

class CoachingController extends Controller
{
    protected function addcoach(coachReqeust $reqeust){
        Coach::create($reqeust->all());
        return redirect()->back()
            ->with('success','You have successfully submit a demande for coaching.');
    }
}
