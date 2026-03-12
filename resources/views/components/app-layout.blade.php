<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-screen overflow-hidden">
            <!-- Header -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6 z-10">
                <div class="flex items-center">
                    <button class="sm:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800 ml-4 sm:ml-0">Dashboard</h2>
                </div>
            </header>

            <!-- Page Content -->
            <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg flex items-center justify-between transition-all">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-700 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
