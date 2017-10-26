<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function tweets(Request $request)
    {
        if ($request->term != NULL) {
            $term = $request->term;
        } else {
            $term = "";
        }
        
        return view('tweets', [
            'term' => $term
        ]);
    }
    
}
