<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Enums\ProjectStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(20);

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => '',
            'start_date' => [
                'required',
                Rule::date()->afterToday()
            ],
            'status' => [new Enum(ProjectStatusEnum::class)],
        ]);

        Project::create($request->all());

        return redirect()->route('projects.show');
    }

    public function edit(string $id)
    {
        if (!$project = Project::find($id)) {
            return redirect()->route('project.index')->with('message', 'Projeto não encontrado.');
        }

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, string $id)
    {
        if (!$project = Project::find($id)) {
            return back()->with('message', 'Projeto não encontrado.');
        }
        $project->update($request->only([
            'name'
        ]));

        return redirect()->route('projects.show');
    }

    public function show(string $id)
    {
        if (!$project = Project::find($id)) {
            return back()->with('message', 'Projeto não encontrado.');
        }
        return view('projects.show', compact('project'));
    }
}
