<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            "username" => ['required'],
            "password" => ['required']
        ]);

        $user = User::where('username',$request->username)->first();

        if($user->status != "active"){
            return redirect('/login')->with('inactive','Your account is not active yet.');
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('/dashboard')->with('status','success login');
            }
            if(Auth::user()->role_id == 2){
                return redirect('/profile')->with('status','success login');
             }
            
        }

        return back()->withErrors([
            'failed' => 'username/password salah',
        ]);
    }
    
    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/books');
    }

    public function registering (Request $request){
        $validated = $request->validate([
            "username" => ['required','unique:users,username'],
            "password" => ['required','min:6'],
            "phone" => ['numeric','nullable'],
            "address" => ['required']
        ]);
        // dd($validated['username']);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        return redirect('/register')->with('status','success register, wait admin for approval');
    }
}
