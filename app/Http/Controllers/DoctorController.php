<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status', 'all');

        $doctors = Doctor::when($status !== 'all', function($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        return view('doctors', compact('doctors', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:0',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors')->with('success', 'Doctor added successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:0',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors')->with('success', 'Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $newStatus = $doctor->status === 'Active' ? 'Inactive' : 'Active';
        $doctor->update(['status' => $newStatus]);
        
        $message = $newStatus === 'Active' ? 'activated' : 'inactivated';
        return redirect()->route('doctors')->with('danger', "Doctor {$message} successfully");
    
    }
}
