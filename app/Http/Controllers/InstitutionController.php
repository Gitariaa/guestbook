<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    
    public function index()
    {
        $institutions = Institution::all();
        return view('pages.institution.index', compact('institutions'));
    }

    public function create()
    {
        return view('pages.institution.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Name must be filled',
        ]);
        Institution::create($request->all());
        return redirect()->route('admin.institution.index');
    }

    public function show(string $id)
    {
        $institutions = Institution::find($id);
        return view('pages.institution.show', compact('institutions'));
    }

    public function edit(string $id)
    {
        $institutions = Institution::find($id);
        return view('pages.institution.edit', compact('institutions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $institution = Institution::findOrFail($id);
    $institution->update($request->all());

    return redirect()->route('admin.institution.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $institutions = Institution::find($id);
        $institutions->delete();
        return redirect()->route('admin.institution.index');
    }
}
