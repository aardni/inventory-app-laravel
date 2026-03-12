<aside class="w-64 bg-white shadow-md hidden sm:flex sm:flex-col">
    <div class="h-16 flex items-center justify-center border-b border-gray-200">
        <h1 class="text-xl font-bold text-indigo-600">Inventory App</h1>
    </div>
    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 {{ request()->routeIs('dashboard') ? 'bg-indigo-50 text-indigo-600 font-medium' : 'text-gray-700' }}">Dashboard</a>
        <a href="{{ route('categories.index') }}" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 {{ request()->routeIs('categories.*') ? 'bg-indigo-50 text-indigo-600 font-medium' : 'text-gray-700' }}">Categories</a>
        <a href="{{ route('products.index') }}" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 hover:text-indigo-600 {{ request()->routeIs('products.*') ? 'bg-indigo-50 text-indigo-600 font-medium' : 'text-gray-700' }}">Products</a>
    </nav>
</aside>