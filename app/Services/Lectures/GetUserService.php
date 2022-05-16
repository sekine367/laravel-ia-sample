<?php

namespace App\Services\Lectures;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GetUserService
{
  public static function auth()
  {
    return User::find(Auth::id());
  }
}