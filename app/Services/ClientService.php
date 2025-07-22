<?php

namespace App\Services;

use App\Models\Client;
use Illuminate\Support\Collection;
use Illuminate\Pagination\CursorPaginator;

class ClientService
{
    public function getAll($is_active): CursorPaginator
    {
        $clients = Client::with(['personType', 'documentType', 'taxResponsability', 'gender', 'country', 'howDidYouHear', 'state', 'city']);

        if (!is_null($is_active)) {
            $clients->where('is_active', $is_active);
        }

        return $clients->orderBy('id', 'DESC')->cursorPaginate(15);
    }

    public function getById(int $id): ?Client
    {
        return Client::with(['personType', 'documentType', 'taxResponsability', 'gender', 'country', 'howDidYouHear', 'state', 'city'])->find($id);
    }

    public function create(array $data): Client
    {
        return Client::create($data);
    }

    public function update(int $id, array $data): Client
    {
        $client = Client::find($id);
        $client->update($data);
        return $client;
    }

    public function delete(int $id): void
    {
        Client::find($id)->delete();
    }
}
