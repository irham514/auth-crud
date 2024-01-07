<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index(){
        $tamus = Tamu::all();
        return view('tamu.index', compact('tamus'));
    }

    public function create(){
        return view('tamu.create', );
    }

    public function store(Request $request){
        $request -> validate([
            'nama'          => 'required|string|max:255',
            'alamat'        => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
        ]);
        Tamu::create([
            'nama'          => $request->input('nama'),
            'alamat'        => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon')
        ]);
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil disimpan');
    }

    public function edit($id){
        $tamus = Tamu::find($id);
        return view('tamu.edit', compact('tamus'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama'          => 'required|string|max:255',
            'alamat'        => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
        ]);
        $tamus = Tamu::find($id);
        $tamus->nama = $request->input('nama');
        $tamus->alamat = $request->input('alamat');
        $tamus->nomor_telepon = $request->input('nomor_telepon');
        $tamus->save();
        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil di perbarui.');
    }

    public function destroy($id){
        $tamus = Tamu::find($id);
        if ($tamus) {
            $tamus->delete();
            return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil di hapus.');
        }else {
            return redirect()->route('tamu.index')->with('success', 'Data tamu tidak ditemukan');
        }
    }

    public function signature(){
        return view('tamu.signature');
    }

}
