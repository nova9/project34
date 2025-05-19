<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $roleRoutes = [
            'owner' => '/driving_school/dashboard',
            'students' => '/student/dashboard',
        ];

        $team = auth()->user()->teams()->first();


        $role = $team->pivot->role->name;


        $route = $roleRoutes[$role] ?? '/dashboard';

        return redirect($route);
    }
}
