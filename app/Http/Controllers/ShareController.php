<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Share;

class ShareController extends Controller
{
    public function  create(Request $request)
    {
        $share = new Share();
        $share->url = $request->url;
        $share->text1 = $request->text1;
        $share->text2 = $request->text2;
        $share->text3 = $request->text3;
        $share->save();

        return view('welcome');
    }    
}
