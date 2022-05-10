<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    //
    public function index(){
        $samples = Sample::all();
        // dd($samples);
        return view('samples.index', compact('samples'));
    }
    public function create(){
        return view('samples.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
            'email' => 'required|unique:samples|email',
        ]);
        // dd($request);

        Sample::create([
            'name' => $request['name'],
            'email' =>$request['email']
        ]);

        session()->flash('flash_message', 'ユーザーを登録しました。');

        return redirect()->route('samples.index');
    }
}
