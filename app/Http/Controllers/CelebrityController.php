<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCelebrityRequest;
use App\Http\Requests\UpdateCelebrityRequest;
use App\Models\Celebrity;
use Inertia\Inertia;

class CelebrityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $celebrities = Celebrity::all();

        return Inertia::render('Celebrity/Index', compact('celebrities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Celebrity/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCelebrityRequest $request): \Illuminate\Http\RedirectResponse
    {
        Celebrity::create($request->validated());

        return to_route('celebrities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Celebrity $celebrity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Celebrity $celebrity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCelebrityRequest $request, Celebrity $celebrity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Celebrity $celebrity)
    {
        //
    }
}
