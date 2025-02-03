<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.create');
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

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.AdminCategoryIndex')->with('success', 'Berhasil menambahkan Kategori!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categories = Category::find($id);

        return view('admin.category.edit', compact('categories'));
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

        Category::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.AdminCategoryIndex')->with('success', 'Berhasil mengedit Kategori!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categories = Category::where('id', $id)->delete();

        if ($categories) {
            return redirect()->back()->with('success', 'Berhasil menghapus kategori!');
        } else {
            return redirect()->back()->with('failed', 'Gagal menghapus kategori!');
        }
    }
}
