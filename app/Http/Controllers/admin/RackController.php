<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rack;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $racks = Rack::all();
        return view('admin.rack.index', compact('racks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.rack.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'code' => 'required|unique:racks',
            'name' => 'required',
        ]);

        Rack::create([
            'code' => $request->code,
            'name' => $request->name,
        ]);
        return redirect()->route('admin.AdminRackIndex')->with('success', 'Rak berhasil ditambahkan.');
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
        $racks = Rack::find($id);
        return view('admin.rack.edit', compact('racks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'code' => 'required|unique:racks',
            'name' => 'required',
        ]);

        Rack::where ('id', $id)->update([
            'code' => $request->code,
            'name' => $request->name,
        ]);
        return redirect()->route('admin.AdminRackIndex')->with('success', 'Rak berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Rack::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Berhasil Menghapus Data' );
    }
}
