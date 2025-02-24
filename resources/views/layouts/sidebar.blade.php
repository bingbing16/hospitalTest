<aside class="fixed inset-y-0 left-0 bg-white shadow-lg max-h-screen w-64">
    <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
            <div class="px-4 py-6 text-center border-b">
                <h1 class="text-xl font-bold leading-none"><span class="text-indigo-600">Ruby</span> Hospital</h1>
            </div>
            <div class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('dashboard') }}" 
                           class="flex items-center rounded-xl font-bold text-sm text-gray-900 py-3 px-4 hover:bg-gray-50 {{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-600' : '' }}">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="text-lg mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg> -->
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('patients') }}" 
                           class="flex items-center rounded-xl font-bold text-sm text-gray-900 py-3 px-4 hover:bg-gray-50 {{ request()->routeIs('patients*') ? 'bg-indigo-50 text-indigo-600' : '' }}">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="text-lg mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                <path d="M9 14h6"></path>
                                <path d="M9 10h6"></path>
                                <path d="M9 18h6"></path>
                            </svg> -->
                            Patients
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('doctors') }}" 
                           class="flex items-center rounded-xl font-bold text-sm text-gray-900 py-3 px-4 hover:bg-gray-50 {{ request()->routeIs('doctors*') ? 'bg-indigo-50 text-indigo-600' : '' }}">
                            Doctors
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-4 border-t">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}" alt="" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside> 