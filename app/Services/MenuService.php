<?php

namespace App\Services;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MenuService
{
    public function getAllLatest(): Collection
    {
        return Menu::latest()->get();
    }

    public function create(array $data, UploadedFile $image): Menu
    {
        $path = $image->store('menus', 'public');

        return Menu::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'] ?? null,
            'description' => $data['description'] ?? null,
            'price' => $data['price'],
            'image_path' => $path,
        ]);
    }

    public function update(Menu $menu, array $data, ?UploadedFile $image = null): Menu
    {
        if ($image) {
            $this->deleteImageFile($menu->image_path);
            $menu->image_path = $image->store('menus', 'public');
        }

        $menu->update([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'] ?? null,
            'description' => $data['description'] ?? null,
            'price' => $data['price'],
            'image_path' => $menu->image_path,
        ]);

        return $menu;
    }

    public function delete(Menu $menu): void
    {
        $this->deleteImageFile($menu->image_path);
        $menu->delete();
    }

    protected function deleteImageFile(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
