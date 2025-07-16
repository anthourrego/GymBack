<?php


namespace App\Http\Controllers\Api\Membership;

use App\Http\Controllers\Controller;
use App\Http\Requests\Membership\StoreMembershipRequest;
use App\Services\MembershipService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class MembershipController extends Controller
{
    protected MembershipService $membershipService;
    public function __construct(MembershipService $membershipService)
    {
        $this->membershipService = $membershipService;
    }

    public function store(StoreMembershipRequest $request): JsonResponse
    {
        $membership = $this->membershipService->create($request->validated());

        return response()->json($membership);
    }

    public function index(Request $request):JsonResponse
    {

        $memberships = $this->membershipService->get();
        return response()->json($memberships,200);
    }

}
