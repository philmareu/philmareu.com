<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;
use PhilMareu\Models\Project;

class ProjectsController extends Controller
{
    protected $project;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projectsQuery = $this->project->with('image', 'tags')->orderBy('ordinal');

        if($request->has('tag')) $projectsQuery->whereHas('tags', function ($query) use ($request) {
            $query->where('slug', $request->get('tag'));
        });

        return view('projects.index')
            ->withProjects($projectsQuery->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show')
            ->withProject($project->load('screenshots'));
    }
}
