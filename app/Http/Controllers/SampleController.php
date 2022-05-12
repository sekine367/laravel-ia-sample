<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;
use App\Http\Requests\SampleRequest;

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

    public function store(SampleRequest $request){

        // $validated = $request->validate([
        //     'name' => 'required|min:2|max:255',
        //     'email' => 'required|unique:samples|email',
        // 'email' => ['required', Rule::unique('texts')];
        // ]);
        // dd($request);

        Sample::create([
            'name' => $request['name'],
            'email' =>$request['email']
        ]);

        session()->flash('flash_message', 'ユーザーを登録しました。');

        return redirect()->route('samples.index');
    }

    public function show($id){
        // dd($id);
        $sample = Sample::findOrFail($id);
        return view('samples.show', compact('sample'));
    }

    public function edit($id){
        $sample = Sample::findOrFail($id);
        return view('samples.edit', compact('sample'));
    }

    public function update(Request $request, $id)
{
$sample = Sample::findOrFail($id);
$sample->name = $request['name'];
$sample->email = $request['email'];
$sample->save();

return redirect()->route('samples.index');
}

public function delete($id)
{
$sample = Sample::findOrFail($id)->delete();
return redirect()->route('samples.index');
}

}
