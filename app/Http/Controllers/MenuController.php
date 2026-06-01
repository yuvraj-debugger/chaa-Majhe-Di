<?php

namespace App\Http\Controllers;

use App\Http\Requests\Menu\StoreMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function __construct(
        protected MenuService $menuService
    ) {}

    public function index(): View
    {
        $menus = $this->menuService->getAllLatest();

        return view('menus.index', compact('menus'));
    }

    public function store(StoreMenuRequest $request): RedirectResponse
    {
        if (! $request->hasFile('image')) {
            return back()->with('error', 'Image upload failed.');
        }

        $this->menuService->create($request->validated(), $request->file('image'));

        return back()->with('success', 'Menu item added successfully.');
    }

    public function edit(Menu $menu): View
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(UpdateMenuRequest $request, Menu $menu): RedirectResponse
    {
        $this->menuService->update($menu, $request->validated(), $request->file('image'));

        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    public function destroy(Menu $menu): RedirectResponse
    {
        $this->menuService->delete($menu);

        return back()->with('success', 'Menu item removed successfully.');
    }
}
