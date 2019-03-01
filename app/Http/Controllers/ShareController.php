<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Share;

class ShareController extends Controller
{
    public function  create(Request $request)
    {
        $share = new Share();
        $share->fill($request->all())->save();

        return view('welcome');
    }    
}
