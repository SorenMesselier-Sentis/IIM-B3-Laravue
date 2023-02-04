<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("Project/Index", [
            'projects' => Project::with('client')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Project/Create", [
            'clients' => Project::with('client')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'phone' => 'required',
            'email' => 'required:unique',
            'title' => 'required',
            'content' => 'required',
            'begining_project_date' => 'required',
            'ending_project_date' => 'required',
            'project_status' => 'required',
            'days_spent' => 'required'
        ]);

        Project::create($request->only([
            'client_id',
            'last_name',
            'first_name',
            'phone',
            'email',
            'title',
            'content',
            'begining_project_date',
            'ending_project_date',
            'project_status',
            'days_spent',
        ]));

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        $client = Project::with('client')->get();

        return Inertia::render("Project/Edit", [
            'project' => $project,
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $project = Project::where('id', $id)->firstOrFail();

        $request->validate([
            'client_id' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'phone' => 'required',
            'email' => 'required:unique',
            'title' => 'required',
            'content' => 'required',
            'begining_project_date' => 'required',
            'ending_project_date' => 'required',
            // 'project_status' => 'required',
        ]);

        $project->update($request->only([
            'client_id',
            'last_name',
            'first_name',
            'phone',
            'email',
            'title',
            'content',
            'begining_project_date',
            'ending_project_date',
            'project_status',
        ]));

        return redirect()->route("project.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::where('id', $id)->firstOrFail();
        $project->delete();

        return redirect()->route("project.index");
    }
}
