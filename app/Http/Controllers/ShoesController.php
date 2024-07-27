<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.shoes.index', [
            'active' => 'shoes',
            'categories' => Category::all(),
            'shoess' => Shoes::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'nama_sepatu' => 'required',
            'stok' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
            'id_category' => 'required',
            'image1' => 'required|max:1024',
            'image2' => 'required|max:1024',
            'image3' => 'required|max:1024',
            'deskripsi' => 'required'
        ]);

        if($request->file('image1')) {
            $validateData['image1'] = $request->file('image1')->store('shoes-images');
        }

        if($request->file('image2')) {
            $validateData['image2'] = $request->file('image2')->store('shoes-images');
        }

        if($request->file('image3')) {
            $validateData['image3'] = $request->file('image3')->store('shoes-images');
        }
        // return $validateData;

        Shoes::create($validateData);

        return redirect('/shoes')->with('success', 'Shoe added successfully!');
    }

    public function view(Shoes $shoes)
    {
        // return $shoes;
        return view('admin.shoes.view', [
            'active' => 'shoes',
            'shoes' => $shoes
        ]);
    }

    public function edit(Shoes $shoes)
    {
        // return $shoes;
        return view('admin.shoes.edit', [
            'active' => 'shoes',
            'shoes' => $shoes,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Shoes $shoes)
    {
        // return $shoes;
        // return $request;

        $rules = [
            'nama_sepatu' => 'required',
            'stok' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
            'id_category' => 'required',
            'image1' => 'max:1024',
            'image2' => 'max:1024',
            'image3' => 'max:1024',
            'deskripsi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image1')) {
            if($request->oldImage1) {
                Storage::delete($request->oldImage1);
            }

            $validatedData['image1'] = $request->file('image1')->store('shoes-images');
        }

        if($request->file('image2')) {
            if($request->oldImage2) {
                Storage::delete($request->oldImage2);
            }

            $validateData['image2'] = $request->file('image2')->store('shoes-images');
        }

        if($request->file('image3')) {
            if($request->oldImage3) {
                Storage::delete($request->oldImage3);
            }

            $validatedData['image3'] = $request->file('image3')->store('shoes-images');
        }

        Shoes::where('id', $shoes->id)->update($validatedData);
        return redirect('/shoes')->with('success', 'Shoe has been edited!');
    }

    public function delete(Shoes $shoes)
    {
        // return $shoes;
        if($shoes->image1) {
            Storage::delete($shoes->image1);
        }

        if($shoes->image2) {
            Storage::delete($shoes->image2);
        }

        if($shoes->image3) {
            Storage::delete($shoes->image3);
        }

        Shoes::destroy($shoes->id);
        return redirect('/shoes')->with('success', 'Shoe has been deleted!');
    }
}
