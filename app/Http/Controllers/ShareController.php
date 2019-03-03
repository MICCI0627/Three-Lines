<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateShare; 
use App\Share;

class ShareController extends Controller
{
    public function  create(CreateShare $request)
    {
        $share = new Share();
        $share->fill($request->all())->save();

        return view('welcome');
    }    
}
