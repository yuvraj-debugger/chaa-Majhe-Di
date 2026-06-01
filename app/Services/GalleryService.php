<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class GalleryService
{
    public function getAllLatest(): Collection
    {
        return Gallery::latest()->get();
    }

    public function create(UploadedFile $image, ?string $title = null): Gallery
    {
        $path = $image->store('galleries', 'public');

        return Gallery::create([
            'image_path' => $path,
            'title' => $title,
        ]);
    }

    public function update(Gallery $gallery, ?string $title, ?UploadedFile $image = null): Gallery
    {
        if ($image) {
            $this->deleteImageFile($gallery->image_path);
            $gallery->image_path = $image->store('galleries', 'public');
        }

        $gallery->title = $title;
        $gallery->save();

        return $gallery;
    }

    public function delete(Gallery $gallery): void
    {
        $this->deleteImageFile($gallery->image_path);
        $gallery->delete();
    }

    protected function deleteImageFile(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
