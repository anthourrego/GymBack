<?php


namespace App\Http\Controllers\Api\SettingsApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingsApp\StoreSettingsAppRequest;
use App\Services\SettingAppService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class SettingAppController extends Controller
{
    protected SettingAppService $settingService;
    public function __construct(SettingAppService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function store(StoreSettingsAppRequest $request): JsonResponse
    {
        $settings = $this->settingService->storeAppSettings($request->validated());
        return response()->json([
          'message' => 'Configuraciones guardadas exitosamente',
          'data' => $settings
        ], 201);
        
    }

    public function index(Request $request):JsonResponse
    {

      try {
        $settings = $this->settingService->getAllSettings();
        
        return response()->json([
            'data' => $settings
        ]);
        
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Error al obtener las configuraciones',
            'error' => $e->getMessage()
        ], 500);
    }
    }

}
