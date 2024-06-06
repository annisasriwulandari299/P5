<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $destinasi = Destinasi::orderBy('id', 'desc')->get();
        return view('destinasi.index', compact('destinasi'));

    }

    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('destinasi.create', compact('kategori', 'lokasi'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tempat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|max:2048|mimes:png,jpg',
            'id_kategori' => 'required',
            'id_lokasi' => 'required',
        ]);

        $destinasi = new Destinasi();
        $destinasi->nama_tempat = $request->nama_tempat;
        $destinasi->harga = $request->harga;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->id_kategori = $request->id_kategori;
        $destinasi->id_lokasi = $request->id_lokasi;

// upload Foto
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/destinasi/', $name);
            $destinasi->foto = $name;
        }

        $destinasi->save();
        return redirect()->route('destinasi.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();

        return view('destinasi.show', compact('destinasi','lokasi','kategori'));

    }

    public function edit($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('destinasi.edit', compact('destinasi', 'kategori', 'lokasi'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_tempat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            // 'foto' => 'required|max:2048|mimes:png,jpg',
            'id_kategori' => 'required',
            'id_lokasi' => 'required',
        ]);

        $destinasi = Destinasi::findOrFail($id);
        $destinasi->nama_tempat = $request->nama_tempat;
        $destinasi->harga = $request->harga;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->id_kategori = $request->id_kategori;
        $destinasi->id_lokasi = $request->id_lokasi;

        if ($request->hasFile('foto')) {
            $destinasi->deleteImage(); // untuk hapus gambar sebelum diganti gambar baru
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/destinasi/', $name);
            $destinasi->foto = $name;
        }

        $destinasi->save();
        return redirect()->route('destinasi.index')
            ->with('success', 'data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->delete();

        return redirect()->route('destinasi.index')->with('success', 'data berhasil dihapus!');

    }
}
