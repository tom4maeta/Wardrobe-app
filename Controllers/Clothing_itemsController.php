<?php
namespace App\Http\Controllers;

use App\Models\Clothing_Items;
use Illuminate\Http\Request;

class Clothing_ItemsController extends Controller
{
    // Display all clothing items
    public function index()
    {
        $clothing_items = Clothing_Items::where('user_id', auth()->id())->get();
        return view('clothing_items.index', compact('clothing_Items'));
    }

    // Show the form for creating a new clothing item
    public function create()
    {
        return view('clothing_items.create');
    }

    // Store a new clothing item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url',
        ]);

        Clothing_Items::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'image_url' => $request->image_url,
        ]);

        return redirect()->route('clothing_items.index')->with('success', 'Clothing item created successfully!');
    }

    // Show the form for editing a clothing item
    public function edit(Clothing_Items $clothing_items)
    {
        $this->authorize('update', $clothing_Items);
        return view('clothing_items.edit', compact('clothing_Items'));
    }

    // Update a clothing item
    public function update(Request $request, Clothing_Items $clothing_items)
    {
        $this->authorize('update', $clothing_items);

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'category' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url',
        ]);

        $clothing_items->update($request->only(['name', 'category', 'description', 'image_url']));

        return redirect()->route('clothing_items.index')->with('success', 'Clothing item updated successfully!');
    }

    // Delete a clothing item
    public function destroy(Clothing_Items $clothing_items)
    {
        $this->authorize('delete', $clothing_items);
        $clothing_Items->delete();
        return redirect()->route('clothing_items.index')->with('success', 'Clothing item deleted successfully!');
    }
}