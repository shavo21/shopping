<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
    * Render view for logging in the user.
    * GET /login
    *
    * @return view
    */
    public function getLogin()
    {
        dd('user');
    }
}
