<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_barang'=>'required',
            'jenis_barang'=>'required',
            'jumlah_barang'=>'required'
        ]);

        Barang::create($validate);
        return redirect()->route('barang.index');
    }
    
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }
    
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $validate = $request->validate([
            'nama_barang'=>'required',
            'jenis_barang'=>'required',
            'jumlah_barang'=>'required'
        ]);
        $barang->update($validate);
        return redirect()->route('barang.index');        
    }
    
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
