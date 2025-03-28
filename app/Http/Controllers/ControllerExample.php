<?php

namespace App\Http\Controllers;

use App\Services\ServiceExample;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class ControllerExample extends Controller
{
    protected ServiceExample $serviceExample;

    public function __construct(ServiceExample $serviceExample)
    {
        $this->serviceExample = $serviceExample;
    }

    /**
     * @throws Throwable
     */
    public function index(Request $request): JsonResponse
    {
        // TODO: Explore how to use the logger, here it's stored in storage/logs/laravel.log
        Log::info('ControllerExample@index called');

        // TODO: Explore how to use the request and validate. Here the exists is a bit much for this example but it exists.
        $validatedParams = $request->validate([
            'id' => 'required|integer|exists:users',
        ]);

        $user = $this->serviceExample->findUserById($validatedParams['id']);

        return response()->json($user);
    }
}
