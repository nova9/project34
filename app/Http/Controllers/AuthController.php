<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }

    public function signup_post()
    {
        $validated = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => Password::default(),
            'role' => 'required|in:student,driving_school',
        ]);

        $user = null;

        DB::transaction(function() use ($validated, &$user) {
            $user = User::create(
                Arr::except($validated, 'role')
            );
            $user->roles()->attach(
                Role::where('name', $validated['role'])->first()
            );
        });

        Auth::login($user);
        return redirect('/login')->with('success', 'Account created successfully. You can now log in.');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_post()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        request()->session()->regenerate();

        $user = Auth::user();
        $roleName = $user->roles()->first()->name;

        $redirects = [
            'driving_school' => '/driving_school/dashboard',
            'student'        => '/student/dashboard',
            'admin'          => '/admin/dashboard',
            // Add more roles here as needed
        ];

        $redirectPath = $redirects[$roleName] ?? '/';

        return redirect($redirectPath);

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }
}
