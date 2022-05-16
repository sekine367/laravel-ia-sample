<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lecture;
use Illuminate\Support\Facades\Auth;
use App\Services\Lectures\GetUserService;
use Illuminate\Support\Facades\Log;


class LectureController extends Controller
{
    public function index()
    {
        $user = GetUserService::auth();
        Log::info("user data " . $user);
        return view('lectures.index', compact('user'));
    }

    public function edit()
    {
        $user = GetUserService::auth();
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
        $user = GetUserService::auth();
        $user->lectures()->sync($request->lecture);
        return redirect()->route('lectures.index');
    }
}
