<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __construct(
        protected GalleryService $galleryService
    ) {}

    public function index(): View
    {
        $galleries = $this->galleryService->getAllLatest();

        return view('galleries.index', compact('galleries'));
    }

    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        if (! $request->hasFile('image')) {
            return back()->with('error', 'Image upload failed.');
        }

        $this->galleryService->create(
            $request->file('image'),
            $request->input('title')
        );

        return back()->with('success', 'Image uploaded successfully to gallery.');
    }

    public function edit(Gallery $gallery): View
    {
        return view('galleries.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery): RedirectResponse
    {
        $this->galleryService->update(
            $gallery,
            $request->input('title'),
            $request->file('image')
        );

        return redirect()->route('galleries.index')->with('success', 'Gallery image updated successfully.');
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        $this->galleryService->delete($gallery);

        return back()->with('success', 'Image removed from gallery.');
    }
}
