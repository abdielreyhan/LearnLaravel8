<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request,$identifier)
    {
        // dd($identifier);
        $username=$identifier;
        return view('profile',compact('username'));
    }
}
