<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now();
        $user = Auth::user();

        return view('dashboard');
    }
}
