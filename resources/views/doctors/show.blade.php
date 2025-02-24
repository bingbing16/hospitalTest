<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Details - {{ config('app.name') }}</title>
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
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Doctors Details</h2>
                <a href="{{ route('doctors') }}" 
                   class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                    Back to List
                </a>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ $doctor->name }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ $doctor->email }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Age</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ $doctor->age }}</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Phone</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ $doctor->phone }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Address</label>
                                    <p class="mt-1 text-sm text-gray-900 bg-gray-50 rounded-lg p-3">{{ $doctor->address }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Status</label>
                                    <p class="mt-1 inline-flex px-2 text-xs font-semibold rounded-full 
                                        {{ $doctor->status === 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $doctor->status }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('doctors.edit', $doctor) }}" 
                           class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                            Edit Patient
                        </a>
                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="{{ $doctor->status === 'Active' ? 'bg-red-600 hover:bg-red-700' : 'bg-green-600 hover:bg-green-700' }} text-white px-4 py-2 rounded-lg"
                                    onclick="return confirm('Are you sure you want to {{ $doctor->status === 'Active' ? 'inactivate' : 'activate' }} this patient?')">
                                {{ $doctor->status === 'Active' ? 'Inactivate' : 'Activate' }} Doctor
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html> 