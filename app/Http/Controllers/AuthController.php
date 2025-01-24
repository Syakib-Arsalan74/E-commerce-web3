<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  function viewRegister(){
    return view('register');
  }
  function submitRegister(Request $request){
    $user = new User()
  }
}
