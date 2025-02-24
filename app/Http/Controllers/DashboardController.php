<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalPatients = Patient::count();
        $totalDoctors = Doctor::count();    

        $status = $request->get('status');
        $activedoctors = Doctor::where('status', 'active')->count();

        return view('dashboard', compact('totalPatients', 'totalDoctors', 'activedoctors'));
    }
} 