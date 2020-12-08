<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\ProductSettingsServices;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Monument\MonumentRequest;
use Exception;
use Illuminate\Http\Request;

class MonumentController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new ProductSettingsServices();
    }

    public function index($id)
    {
        try {
            $this->service->checkProductType($id);
            $data = $this->service->showAttributes($id);
        } catch (Exception $exception) {
            Log::info($exception);
            return abort(404);
        }
        return $data;
    }

    public function setAttributes(Request $request)
    {
        try {
            $data = $this->service->setAttributes($request);
        } catch (Exception $exception) {
            Log::info($exception);
            return response('Error', 404);
        }
        return response($data, 200);
    }

    public function saveProduct(MonumentRequest $request)
    {
        try {
           $data = $this->service->saveProduct($request);
        } catch (Exception $exception) {
            Log::info($exception);
            return response('Error', 404);
        }
        return response($data, 200);
    }

    public function getPriceEngravingPortrait(Request $request)
    {
        try {
            $data = $this->service->getPriceEngravingPortrait($request);
        } catch (Exception $exception) {
            Log::info($exception);
            return response('Error', 404);
        }
        return response($data, 200);
    }

    public function getPriceMedallion(Request $request)
    {
        try {
            $data = $this->service->getPriceMedallion($request);
        } catch (Exception $exception) {
            Log::info($exception);
            return response('Error', 404);
        }
        return response($data, 200);
    }

    public function getImageType(Request $request)
    {
        try {
            $data = $this->service->imgSort($request);
        } catch (Exception $e) {
            Log::info($e);
            return response('Error', 404);
        }
        return response($data, 200);
    }

    public function fastOrder(MonumentRequest $request)
    {
        try {
           $data = $this->service->fastOrder($request);
        } catch (Exception $e) {
            Log::info($e);
            return response('FastOrder not created!', 404);
        }
        return response($data,200);
    }

    public function getModels(Request $request)
    {
        try {
           $response = $this->service->getModels($request);
        } catch (Exception $e) {
            Log::info($e);
            return response('Models not found', 404);
        }
        return response($response, 200);
    }
}

