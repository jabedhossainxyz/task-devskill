<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            Log::warning('Login attempt failed: Username not found', ['username' => $request->username]);
            return redirect('/')->with('error', 'User not found');
        }

        if (Hash::check($request->password, $user->password)) {
            Log::info('Login successful', ['username' => $user->username]);
            return redirect('/dashboard')->with('success', 'Login Successful');
        }

        Log::error('Login failed: Invalid password', ['username' => $user->username]);
        return redirect('/')->with('error', 'Invalid credentials');
    }
    public function dashboard()
    {
        $users = User::all();
        return view('dashboard.index', compact('users'));
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        
    }
}
