<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:3',
        ]);

        Brand::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.AdminBrandIndex')->with('success', 'Berhasil menambahkan Brand!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $brands = Brand::find($id);

        return view('admin.brand.edit', compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|min:3',
        ]);

        Brand::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.AdminBrandIndex')->with('success', 'Berhasil mengedit Brand!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $brands = Brand::where('id', $id)->delete();

        if ($brands) {
            return redirect()->back()->with('success', 'Berhasil menghapus Brand!');
        } else {
            return redirect()->back()->with('failed', 'Gagal menghapus Brand!');
        }
    }
}
