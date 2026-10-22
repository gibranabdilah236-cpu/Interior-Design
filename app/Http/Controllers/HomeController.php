<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured()
            ->orderBy('sort_order')
            ->limit(6)
            ->get();

        $services = Service::ordered()->limit(3)->get();
        $testimonials = Testimonial::active()->limit(3)->get();

        return view('home', compact('featuredProjects', 'services', 'testimonials'));
    }
}
