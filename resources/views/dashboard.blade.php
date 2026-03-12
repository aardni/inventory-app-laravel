<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Categories Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col items-center justify-center hover:shadow-md transition-shadow">
            <div class="p-4 bg-blue-50 text-blue-600 rounded-full mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-700">Total Categories</h3>
            <p class="text-4xl font-bold text-gray-900 mt-2">{{ $categoryCount }}</p>
            <a href="{{ route('categories.index') }}" class="mt-4 text-blue-600 hover:text-blue-800 font-medium">View Categories &rarr;</a>
        </div>

        <!-- Products Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col items-center justify-center hover:shadow-md transition-shadow">
            <div class="p-4 bg-emerald-50 text-emerald-600 rounded-full mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-700">Total Products</h3>
            <p class="text-4xl font-bold text-gray-900 mt-2">{{ $productCount }}</p>
            <a href="{{ route('products.index') }}" class="mt-4 text-emerald-600 hover:text-emerald-800 font-medium">View Products &rarr;</a>
        </div>
    </div>

</x-app-layout>