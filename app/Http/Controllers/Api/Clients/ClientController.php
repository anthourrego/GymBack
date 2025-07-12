<?php

namespace App\Http\Controllers\Api\Clients;

use App\Http\Requests\Client\StoreClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Http\Controllers\Controller;
use App\Services\ClientService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    protected ClientService $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function index(Request $request): JsonResponse
    {
        $is_active = $request->get('is_active') === 1 ? true : ($request->get('is_active') === 0 ? false : null);

        $clients = $this->clientService->getAll($is_active);
        return response()->json($clients);
    }

    public function show(int $id): JsonResponse
    {
        $client = $this->clientService->getById($id);

        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }

        return response()->json($client);
    }

    public function store(StoreClientRequest $request): JsonResponse
    {
        $client = $this->clientService->create($request->validated());

        return response()->json($client);
    }

    public function update(UpdateClientRequest $request, int $id): JsonResponse
    {
        $client = $this->clientService->update($id, $request->validated());

        return response()->json($client);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->clientService->delete($id);

        return response()->json(['message' => 'Client deleted successfully.']);
    }

}
