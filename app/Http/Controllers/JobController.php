<?php

namespace App\Http\Controllers;

use App\Events\JobEdited;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

       return view('jobs.index', [
           'featuredJobs' => $jobs[1],
           'jobs' => $jobs[0],
           'tags' => Tag::all(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attr = request()->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'type' => ['required', Rule::in(['Part Time', 'Full Time', 'Freelance'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attr['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attr, ['tags']));

        if ($attr['tags']) {
           foreach (explode(',', $attr['tags']) as $tag) {
               $job->tag(trim($tag));
           };
        }

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $tags = $job->tags()->pluck('name')->implode(', ');

        return view('jobs.edit', [
            'job' => $job,
            'tags' => $tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $attr = request()->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'type' => ['required', Rule::in(['Part Time', 'Full Time', 'Freelance'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attr['featured'] = $request->has('featured');

        $job->update(Arr::except($attr, ['tags']));

        if ($attr['tags']) {
            // Detach existing tags
            $job->tags()->detach();

            foreach (explode(',', $attr['tags']) as $tag) {
                $job->tag(trim($tag));
            };
        }

        event(new JobEdited());

        return redirect('/')->with('success', 'Data saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/');
    }
}
