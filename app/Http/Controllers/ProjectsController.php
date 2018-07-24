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
    public function index()
    {
        return view('projects.index')
            ->withProjects($this->project->with('image', 'posts')->get());
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
            ->withProject($project);
    }
}
