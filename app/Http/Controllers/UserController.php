<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers(){
        $users = [];
        foreach (User::with('user_address')->get() as $key => $value) {
            $users[$key] = $value;
            $users[$key]['edad'] = Carbon::parse($value->fecha_nacimento)->age;
        }


        return response()->json(
            $users
        );
    }

}