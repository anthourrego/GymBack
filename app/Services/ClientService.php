<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Support\Collection;

class ClientService
{
    public function getAll(): Collection
    {
        return Client::with(['personType', 'documentType'])->get();
    }

    public function getById(int $id): ?Client
    {
        return Client::with(['personType', 'documentType'])->find($id);
    }

    public function create(array $data): Client
    {
        return Client::create($data);
    }

    public function update(Client $client, array $data): Client
    {
        $client->update($data);
        return $client;
    }

    public function delete(Client $client): void
    {
        $client->delete();
    }
}
