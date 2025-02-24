<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status', 'all');
        
        $patients = Patient::when($status !== 'all', function($query) use ($status) {
            return $query->where('status', $status);
        })->get();
        
        return view('patients', compact('patients', 'status'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:0',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients')->with('success', 'Patient added successfully');
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:0',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $patient->update($request->all());

        return redirect()->route('patients')->with('success', 'Patient updated successfully');
    }

    public function destroy(Patient $patient)
    {
        $newStatus = $patient->status === 'Active' ? 'Inactive' : 'Active';
        $patient->update(['status' => $newStatus]);
        
        $message = $newStatus === 'Active' ? 'activated' : 'inactivated';
        return redirect()->route('patients')->with('danger', "Patient {$message} successfully");
    }

    /**
     * Display detailed information about a specific patient
     * 
     * @param Patient $patient
     * @return \Illuminate\View\View
     */
    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }
} 