<x-app-layout>
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <!-- Header Actions -->
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-800">All Categories</h3>
        <a href="{{ route('categories.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors shadow-sm whitespace-nowrap">
            + Add Category
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100 text-gray-600 text-sm font-semibold uppercase tracking-wider">
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Description</th>
                    <th class="px-6 py-4">Created At</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700 text-sm">
                @forelse($categories as $category)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $category->id }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $category->name }}</td>
                    <td class="px-6 py-4 text-gray-500 truncate max-w-xs">{{ $category->description ?? '-' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $category->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4 text-right whitespace-nowrap">
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900 font-medium mr-3">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                        <p class="mb-4">No categories found.</p>
                        <a href="{{ route('categories.create') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">Create your first category</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    @if($categories->hasPages())
    <div class="p-4 border-t border-gray-100">
        {{ $categories->links() }}
    </div>
    @endif
</div>
</x-app-layout>