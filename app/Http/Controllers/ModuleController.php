<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('admin.module.index',compact('modules'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:modules,name,',
            'description' => 'nullable',
        ]);

        $module = new Module;
        $module->name = $request->name;
        $module->description = $request->description;
        $module->save();
        return redirect()->route('module.index')->with('success', 'Module created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $module = Module::find($id);
        return view('admin.module.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        
        $request->validate([
            'name' => 'required|max:255|unique:modules,name,' . $id,
            'description' => 'nullable',
        ]);

        $module = Module::find($id);
        $module->name = $request->name;
        $module->description = $request->description;
        $module->save();
        return redirect()->route('module.index')->with('success', 'Module updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $module = Module::find($id);
        $module->delete(); return redirect()->route('module.index')->with('success', 'Module deleted successfully!');
    
    }
}
