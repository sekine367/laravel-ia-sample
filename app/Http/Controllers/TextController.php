<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TextController extends Controller
{
    public function index(){
        $texts = Text::all();
        // dd($texts);
        return view('texts.index', compact('texts'));
    }
    public function create(){
        return view('texts.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required|min:2|max:50',
            'content' => 'required|max:2000',
        ]);

        Text::create([
            'title' => $request['title'],
            'content' => $request['content']
        ]);

        session()->flash('flash_message', '記事を投稿しました。');

        return redirect()->route('texts.index');
    }    
}
