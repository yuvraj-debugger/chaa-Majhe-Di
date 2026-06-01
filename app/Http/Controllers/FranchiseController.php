<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFranchiseRequest;
use App\Models\Franchise;
use App\Services\FranchiseService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FranchiseController extends Controller
{
    public function __construct(
        protected FranchiseService $franchiseService
    ) {}

    public function index(): View
    {
        $franchises = $this->franchiseService->getAllLatest();

        return view('franchises.index', compact('franchises'));
    }

    public function store(StoreFranchiseRequest $request): RedirectResponse
    {
        $this->franchiseService->create($request->validated());

        return redirect()->back()
            ->with('success_franchise', 'Your franchise inquiry has been successfully submitted! Our team will contact you soon.')
            ->withFragment('franchise');
    }

    public function destroy(Franchise $franchise): RedirectResponse
    {
        $this->franchiseService->delete($franchise);

        return redirect()->back()->with('success', 'Franchise inquiry deleted successfully.');
    }
}
