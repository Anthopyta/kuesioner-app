<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuesioner = Kuesioner::orderBy('created_at', 'DESC')->get();
        return view('kuesioner.index', compact('kuesioner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kuesioner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kuesioner::create($request->all());
        
        return redirect()->route('kuesioner')->with('success', 'Questionnaire added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kuesioner = Kuesioner::findOrFail($id);

        return view('kuesioner.show', compact('kuesioner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kuesioner = Kuesioner::findOrFail($id);

        return view('kuesioner.edit', compact('kuesioner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
