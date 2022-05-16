<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use App\Models\User;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $userTexts = User::find($id)->texts;
        $userTexts = User::find($id)->texts()->where('is_visible', '1')->get();
        return view('users.index', compact('user','userTexts'));
    }
}
