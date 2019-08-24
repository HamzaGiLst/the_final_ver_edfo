<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Http\Requests\formationRequest;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    protected function addFormation(formationRequest $request){
        Formation::create($request->all());
        $request->session()->put('status',$request->entreprise);
         return redirect()->back();
    }
}
