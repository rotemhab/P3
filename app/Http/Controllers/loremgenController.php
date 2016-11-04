<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class loremgenController extends Controller
{
    public function createLoremText(Request $request)
    {
        #validate the request
        $this->validate($request, [
          'parnum' => 'required|numeric|min:1|max:99',
        ]);
        #Generate Lorem Ipsum text
        $parnum = $request->input('parnum');
       #display paragraphs
       return view('loremgen/createlorem')->with('parnum', $parnum);
    }
}
