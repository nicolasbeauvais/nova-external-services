<?php

namespace NicolasBeauvais\NovaExternalServices\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ExternalServiceController extends Controller
{
    public function index()
    {
        return response()->json(config('external-services.services'));
    }
}