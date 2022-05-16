<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lecture;
use Illuminate\Support\Facades\Auth;


class LectureController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        return view('lectures.index', compact('user'));
    }

    public function edit()
    {
        $user = User::find(Auth::id());
        $lectures = Lecture::all();
        foreach($lectures as $lecture)
        {
            $check = "0";
            foreach($user->lectures as $userLecture)
            {
                if($lecture->id === $userLecture->id)
                {
                    $check = "1";
                }
            }
            $lecture_checkBox[] = [
                                     'id' => $lecture->id,
                                     'name' => $lecture->name,
                                     'check' => $check,
                                  ];            
        };
      
        return view('lectures.edit', compact('lecture_checkBox', 'user'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $user = User::find(Auth::id());
        $user->lectures()->sync($request->lecture);
        return redirect()->route('lectures.index');
    }
}
