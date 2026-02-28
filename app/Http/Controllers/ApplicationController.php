<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
   // POST /api/applications
    public function store(Request $request)
    {
        $request->validate([
            'job_id' => 'required|exists:jobs,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume_link' => 'required|url',
            'cover_note' => 'nullable|string'
        ]);

        $application = Application::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $application
        ], 201);
    }
}
