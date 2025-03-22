<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $data = Job::with('employer')->simplePaginate(5);
        return view('jobs.index', ['data' => $data]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function creating()
    {
        request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        Job::create([
                'title' => request('title'),
                'description' => request('description'),
                'employer_id' => 1,
            ]
        );
        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['data' => $job]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['data' => $job]);
    }

    public function editing(Job $job)
    {
        $job->update([
            'title' => request('title'),
            'description' => request('description'),
        ]);
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs/');
    }
}
