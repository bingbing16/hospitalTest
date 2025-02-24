<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - {{ config('app.name') }}</title>
    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <main class="ml-64 p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <a href="{{ route('patients') }}" class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Patients</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $totalPatients }}</p>
                        </div>
                        <div class="p-3 rounded-full bg-blue-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                    <!-- <div class="mt-4">
                        <div class="flex items-center">
                            <span class="text-blue-500 text-sm font-medium">+12.5%</span>
                            <span class="text-gray-600 text-sm ml-2">from last month</span>
                        </div>
                    </div> -->
                </a>

                <!-- <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Available Rooms</p>
                            <p class="text-2xl font-semibold text-gray-900">45/50</p>
                        </div>
                        <div class="p-3 rounded-full bg-green-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div> -->
                    <!-- <div class="mt-4">
                        <div class="flex items-center">
                            <span class="text-green-500 text-sm font-medium">90%</span>
                            <span class="text-gray-600 text-sm ml-2">occupancy rate</span>
                        </div>
                    </div> -->
                <!-- </div> -->

                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Active Doctors</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $activedoctors }} / {{ $totalDoctors }} </p> 
                        </div>
                        <div class="p-3 rounded-full bg-indigo-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v4m0 0h4m-4 0H8" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <!-- <div class="flex items-center">
                            <span class="text-indigo-500 text-sm font-medium">+2</span>
                            <span class="text-gray-600 text-sm ml-2">new this month</span>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Active Nurses</p>
                            <p class="text-2xl font-semibold text-gray-900">78</p>
                        </div>
                        <div class="p-3 rounded-full bg-pink-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4"> -->
                        <!-- <div class="flex items-center">
                            <span class="text-pink-500 text-sm font-medium">+5</span>
                            <span class="text-gray-600 text-sm ml-2">new this month</span>
                        </div> -->
                    <!-- </div>
                </div> -->
            </div>

            <!-- Profile Section -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Profile Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ auth()->user()->name }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ auth()->user()->phone }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Address</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ auth()->user()->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html> 