<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public  function index(){
       // return view('login');
    }
    public function dashboard(Request $request)
    {
        
       
        $user = User::where('email', $request->email)->first();
        
        return view('dashboard',compact('user'));
    }
}
