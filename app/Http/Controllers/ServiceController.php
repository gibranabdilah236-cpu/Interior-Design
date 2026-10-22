<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::ordered()->get();

        return view('services', compact('services'));
    }

    public function show(Service $service)
    {
        return view('service-detail', compact('service'));
    }
}
