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
        // dd($lecture_checkBox);
        // foreach($user->lectures as $lecture)
        // {
        //     // $lecture_id = $lecture->pivot->lecture_id;
        //     // dump($lecture_id);
        // }
        // dd('hello');

        // $lecture = Lecture::find(1);
        // // $test = $user->lectures;
        // // dd($user);
        // foreach($lecture->users as $user)
        // {
        //     dump($user);
        // }
        // dd('hello');
        return view('lectures.index', compact('lecture_checkBox', 'user'));
    }
}
