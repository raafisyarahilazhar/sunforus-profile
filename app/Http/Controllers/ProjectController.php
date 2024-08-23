<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project() {
        return view('content.projects', [
            'title' => 'Project',
            'projects' => Project::paginate(8)
        ]);
    }
}
