
<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">My Wardrobe</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($clothingItems as $item)
                <div class="border p-4 rounded-lg shadow">
                    <img src="{{ $item->image_url ?? 'https://via.placeholder.com/150' }}" alt="Clothing Item" class="w-full h-48 object-cover mb-4">
                    <h2 class="text-xl font-semibold">{{ $item->name }}</h2>
                    <p class="text-gray-600">{{ $item->category }}</p>
                    <p class="text-gray-500">{{ $item->description }}</p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('clothing-items.edit', $item) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('clothing-items.destroy', $item) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('clothing-items.create') }}" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Add Item</a>
    </div>
</x-app-layout>