<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $category = request('category');

        $query = Project::published()->orderBy('sort_order');

        if ($category) {
            $query->category($category);
        }

        $projects = $query->get();
        $categories = Project::pluck('category')->unique()->values();

        return view('portfolio', compact('projects', 'categories', 'category'));
    }

    public function show(Project $project)
    {
        return view('project-detail', compact('project'));
    }
}
