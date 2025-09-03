<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Membership;
use Illuminate\Support\Collection;
use Illuminate\Pagination\CursorPaginator;

class ClientService
{
    public function getAll($is_active): CursorPaginator
    {
        $clients = Client::with(['personType', 'documentType', 'taxResponsability', 'gender', 'country', 'howDidYouHear', 'state', 'city', 'memberships'=>function ($query) {
            $query->where('status', 'active');
        }]);

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
        $client= Client::create($data);
        if (!empty($data['membership_to_assign'])) {
            $membershipId = $data['membership_to_assign'];
    
            $startDate = now();
            $durationDays = Membership::find($membershipId)->duration_days ?? 0; 
            $endDate = now()->addDays($durationDays);
    
            $client->memberships()->attach($membershipId, [
                'start_date' => $startDate,
                'end_date'   => $endDate,
                'status'     => 'active',
            ]);
        }
        return $client;
    
    }

    public function update(int $id, array $data): Client
    {
        $client = Client::find($id);
        $client->update($data);
        if (!empty($data['membership_to_assign'])) {
            $membershipId = $data['membership_to_assign'];
            $client->memberships()->attach($membershipId, [
                'start_date' => now(),
                'end_date'   => now()->addDays(Membership::find($membershipId)->duration_days ?? 0),
                'status'     => 'active',
            ]);
        }
        return $client;
    }

    public function delete(int $id): void
    {
        Client::find($id)->delete();
    }
}
