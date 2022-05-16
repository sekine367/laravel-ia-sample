<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use App\Models\User;
use Illuminate\Validation\Rule;


class TextController extends Controller
{
    public function index(){
        // $texts = Text::all();
        $texts = Text::visible()->paginate(10);
        // $userTexts = User::find(1)->texts;
        // dump($userTexts);


        // $textUsers = Text::find(2)->user;
        // dump($textUsers);

        return view('texts.index', compact('texts'));
    }
    public function create(){
        return view('texts.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required|min:2|max:50',
            'content' => 'required|max:1000',
            'price' => 'required|integer',
            'email' => 'required|unique:texts|email',
            'is_visible' => 'required|boolean'
        ]);

        DB::beginTransaction();
        try {
            Text::create([
                'title' => $request['title'],
                'content' => $request['content'],
                'price' => $request['price'],
                'email' => $request['email'],
                'is_visible' => $request['is_visible'],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        session()->flash('flash_message', '記事を投稿しました。');

        return redirect()->route('texts.index');
    }    

    public function show($id){
        // dd($id);
        $text = Text::findOrFail($id);
        $textUser = Text::find($id)->user;
        return view('texts.show', compact('text', 'textUser'));
    }

    public function edit($id)
    {
        $text = Text::findOrFail($id);
        return view('texts.edit', compact('text'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:2|max:50',
            'content' => 'required|max:1000',
            'price' => 'required|integer',
            // 'email' => 'required|unique:texts|email',
            'email' => ['required', Rule::unique('texts')->ignore($request->id)],
            'is_visible' => 'required|boolean'
        ]);

        $text = Text::findOrFail($id);
        $text->title = $request['title'];
        $text->content = $request['content'];
        $text->price = $request['price'];
        $text->email = $request['email'];
        $text->is_visible = $request['is_visible'];
        $text->save();

        return redirect()->route('texts.index');
    }

    public function delete($id)
    {
        $text = Text::findOrFail($id)->delete();
        return redirect()->route('texts.index');
    }
}
