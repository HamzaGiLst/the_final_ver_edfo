<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;

class RecutementController extends Controller
{
    protected function search_offre_with_pagination(Request $request){
        $r=Annonce::where()->paginate();
        return view('');

    }
    protected function add_annonce_to_db(Request $request){
        Annonce::create($request->all());
        return redirect()->back()
            ->with("somethimng here ");
    }
}
#top think
