<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\story;

class StoriesController extends Controller
{
    //
    public function index() {
        $stories = story::where('user_id', auth()->user()->id)->orderBy('id','DESC')->get();
        
        return view('stories.index', [
            'stories' => $stories
        ]);
    }
}
