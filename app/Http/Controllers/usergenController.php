<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usergenController extends Controller
{
    public function createUsers(Request $request)
    {
       #validate the request
       $this->validate($request, [
           'usernum' => 'required|numeric|min:1|max:99',
        ]);
       #Generate user names
       $usernum = $request->input('usernum');
       $generator = new \Nubs\RandomNameGenerator\Alliteration();
       $names='';
       for ($x = 1; $x <= $usernum; $x++) {
           $names .=  "<p>".$generator->getName()."</p>";
       }
       #print users
       return view('usergen/createusers')->with('names', $names);
    }
}
