<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\KategoriModel;

class ProdukController extends Controller
{
    //
    function getAll($inputSuccess = '')
    {
        $produk = new ProdukModel();
        $rows = $produk->getAll();
        return view('tabel/v_tabelproduk', [
            'rows' => $rows->toArray(),
            'inputSuccess' => $inputSuccess]);
    }

    function formData()
    {
        $kategori = new KategoriModel();
        $rows = $kategori->getKategoriName();
        return view('form/vf_produk', [
            'rows' => $rows->toArray()]);
    }

    function insertData(Request $request)
    {
        $produk = new ProdukModel;
        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required|numeric'
        ]);

        $data = [
            'kategori' => $request->input('kategori'),
            'nama' => $request->input('nama'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga')
        ];

        if ($produk->insert($data))
        {
            $inputSuccess = 'success';
        }
        else
        {
            $inputSuccess = 'failed';
        }
        return $this->getAll($inputSuccess);
    }
}
