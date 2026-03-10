@extends('layouts.app')

@section('header', 'Products')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <!-- Header Actions -->
    <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-white">
        <h3 class="text-lg font-semibold text-gray-800">All Products</h3>
        <a href="{{ route('products.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors shadow-sm whitespace-nowrap">
            + Add Product
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100 text-gray-600 text-sm font-semibold uppercase tracking-wider">
                    <th class="px-6 py-4">Name & SKU</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Stock</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700 text-sm">
                @forelse($products as $product)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-900">{{ $product->name }}</div>
                        <div class="text-xs text-gray-500 mt-1 uppercase tracking-wider">{{ $product->sku }}</div>
                    </td>
                    <td class="px-6 py-4 font-medium">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            {{ $product->category->name }}
                        </span>
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        @if($product->stock > 10)
                            <span class="text-green-600 font-medium">{{ $product->stock }} <span class="text-xs text-gray-500 font-normal">in stock</span></span>
                        @elseif($product->stock > 0)
                            <span class="text-yellow-600 font-medium">{{ $product->stock }} <span class="text-xs text-gray-500 font-normal">low stock</span></span>
                        @else
                            <span class="text-red-600 font-medium">Out of stock</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right whitespace-nowrap">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-indigo-600 hover:text-indigo-900 font-medium mr-3">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                        <p class="mb-4">No products found.</p>
                        <a href="{{ route('products.create') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Create your first product</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    @if($products->hasPages())
    <div class="p-4 border-t border-gray-100">
        {{ $products->links() }}
    </div>
    @endif
</div>
@endsection
