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
        return view('projects.index');
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

        return redirect()->route('projects.index');
    }
}
