<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function __construct(
        protected ContactService $contactService
    ) {}

    public function store(StoreContactRequest $request): RedirectResponse
    {
        $this->contactService->create($request->validated());

        return redirect(url()->previous() . '#contact')
            ->with('success', 'Message sent successfully! We will get back to you soon.');
    }

    public function index(): View
    {
        $contacts = $this->contactService->getAllLatest();

        return view('contacts.index', compact('contacts'));
    }

    public function destroy(Contact $contact): RedirectResponse
    {
        $this->contactService->delete($contact);

        return back()->with('success', 'Message deleted successfully.');
    }
}
