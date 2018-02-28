<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{
    //
    public function getAllUsers()
    {
       
      $users = User::all(); 

       return view("student", compact("users"));
    }
}
