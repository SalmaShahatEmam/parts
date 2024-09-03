<?php

namespace App\Http\Controllers\Site;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('site.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $other_projects = Project::where('slug', '!=', $slug)->take(3)->get();
        return view('site.projects.show', compact('project', 'other_projects'));
    }
}
