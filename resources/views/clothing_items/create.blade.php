
<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Add Clothing Item</h1>
        <form action="{{ route('clothing-items.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" class="w-full p-2 border rounded mb-2">
            <input type="text" name="category" placeholder="Category" class="w-full p-2 border rounded mb-2">
            <textarea name="description" placeholder="Description" class="w-full p-2 border rounded mb-2"></textarea>
            <input type="url" name="image_url" placeholder="Image URL" class="w-full p-2 border rounded mb-2">
            <div class="flex justify-end space-x-2">
                <a href="{{ route('clothing-items.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add</button>
            </div>
        </form>
    </div>
</x-app-layout>