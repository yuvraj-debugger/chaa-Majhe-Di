<?php

namespace App\Services;

use App\Models\Franchise;
use Illuminate\Database\Eloquent\Collection;

class FranchiseService
{
    public function getAllLatest(): Collection
    {
        return Franchise::latest()->get();
    }

    public function create(array $data): Franchise
    {
        return Franchise::create($data);
    }

    public function delete(Franchise $franchise): void
    {
        $franchise->delete();
    }
}
