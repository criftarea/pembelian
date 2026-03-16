<?php

namespace App\Http\Controllers;

use App\Models\Mpembelian;
use Illuminate\Http\Request;

class Cpembelian extends Controller
{
    
    public function index()
    {
        $pembelian = Mpembelian::all();
        return view('pembelian.index', compact('pembelian'));
    }

    public function create()
    {
        return view('pembelian.index');
    }

    public function store(Request $request)
    {
        $pembelian = new Mpembelian();
        $pembelian ->id_pembelian                   =$request->id_pembelian;
        $pembelian ->id_barang                 =$request->id_barang;
        $pembelian ->id_suplier                =$request->id_suplier;
        $pembelian ->qyt                      =$request->qyt;
        $pembelian ->tgl                      =$request->tgl;
        $pembelian->save();

        return redirect()->route('pembelian.index')->with('status', ['judul' => 'Berhasil', 'pesan' => 'Data berhasil disimpan', 'icon' => 'success']);
    }
    public function show (Mpembelian $mpembelian)
    {

    }
    public function edit (string $id_pembelian)
    {
        $pembelian = Mpembelian::where('id_pembelian', $id_pembelian)->first();
        return view ('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, string $id_pembelian)
    {
    
        $pembelian = Mpembelian::where('id_pembelian', $id_pembelian)->first();

        $pembelian ->id_pembelian                   =$request->id_pembelian;
        $pembelian ->id_barang                 =$request->id_barang;
        $pembelian ->id_suplier                =$request->id_suplier;
        $pembelian ->qyt                      =$request->qyt;
        $pembelian ->tgl                      =$request->tgl;
        
        $pembelian->save();
    
        return redirect()->route('pembelian.index')->with('success', 'Data berhasil diperbarui');
    }
    public function destroy($id_pembelian)
    {
        $pembelian = Mpembelian::where('id_pembelian', $id_pembelian)->first();

        $pembelian->delete();
        return redirect()->route('pembelian.index')->with('success', 'Data guru berhasil dihapus');
    }
}