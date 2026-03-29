<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();
        return view('menus.index', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'title' => 'required|string|max:100',
            'subtitle' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menus', 'public');
            
            Menu::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'price' => $request->price,
                'image_path' => $path,
            ]);

            return back()->with('success', 'Menu item added successfully.');
        }

        return back()->with('error', 'Image upload failed.');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'title' => 'required|string|max:100',
            'subtitle' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            // Delete physical old file
            if ($menu->image_path && Storage::disk('public')->exists($menu->image_path)) {
                Storage::disk('public')->delete($menu->image_path);
            }
            
            $path = $request->file('image')->store('menus', 'public');
            $menu->image_path = $path;
        }

        $menu->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $menu->image_path,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image_path && Storage::disk('public')->exists($menu->image_path)) {
            Storage::disk('public')->delete($menu->image_path);
        }

        $menu->delete();

        return back()->with('success', 'Menu item removed successfully.');
    }
}
