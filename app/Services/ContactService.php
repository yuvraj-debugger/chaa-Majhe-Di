<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactService
{
    public function getAllLatest(): Collection
    {
        return Contact::latest()->get();
    }

    public function create(array $data): Contact
    {
        return Contact::create($data);
    }

    public function delete(Contact $contact): void
    {
        $contact->delete();
    }
}
