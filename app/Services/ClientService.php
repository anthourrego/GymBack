<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Support\Collection;

class ClientService
{
    public function getAll($is_active): Collection
    {
        $clients = Client::with(['personType', 'documentType', 'taxResponsability', 'gender', 'country', 'howDidYouHear']);

        if (!is_null($is_active)) {
            $clients->where('is_active', $is_active);
        }

        return $clients->cursorPaginate(15);
    }

    public function getById(int $id): ?Client
    {
        return Client::with(['personType', 'documentType', 'taxResponsability', 'gender', 'country', 'howDidYouHear'])->find($id);
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
