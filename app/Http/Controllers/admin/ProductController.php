<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Rack;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $brands = Brand::all();
        $categories = Category::all();
        $racks = Rack::all();
        return view('admin.product.create', compact('brands', 'categories', 'racks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->merge([
            'price' => str_replace(['Rp', ' ', '.'], '', $request->price) // Hapus "Rp", spasi, dan titik
        ]);
        
        // dd($request->all());
        // dd($request->file('image'));
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999999.99',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|mimeTypes:image/png,image/jpeg,image/jpg,image/gif|max:2048',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'rack_id' => 'required|exists:racks,id',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => (float) $request->price, // Konversi ke float agar tersimpan dengan benar
            'image' => $imagePath,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'rack_id' => $request->rack_id,
        ]);

        return redirect()->route('admin.AdminProductIndex')->with('success', 'Berhasil Membuat Produk!');

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
        $products = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        $racks = Rack::all();
        return view('admin.product.edit', compact('products', 'brands', 'categories', 'racks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999999.99',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'rack_id' => 'required|exists:racks,id',
        ]);

        Product::where ('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'rack_id' => $request->rack_id,
        ]);

        return redirect()->route('admin.AdminProductIndex')->with('success', 'Berhasil Mengedit Produk!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Berhasil Menghapus Data' );
    }
}
