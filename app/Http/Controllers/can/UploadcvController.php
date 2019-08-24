<?php

namespace App\Http\Controllers\can;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadcvController extends Controller
{
    //
    public function CvUploadPost()
    {
        request()->validate([
            'image' => 'required|mimes:pdf',
        ]);
        $imageName = Auth::user()->name.time().'.'.request()->image->getClientOriginalExtension();
        $imageName=str_replace(' ','_',$imageName);
        // request()->image->copy(storage_path('app/public/CVs'), $imageName);
        request()->image->move(public_path('cv'), $imageName);
        return back()
            ->with('success','You have successfully upload You CV.')
            ->with('image',$imageName);
    }
}
