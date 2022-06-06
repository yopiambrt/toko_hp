<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
    //API function untuk menambahkan data Barang baru
    public function insert(Request $request)
    {
        //instansiasi model transaksi
        $barang = new Barang();

        $data = [
            'namaBarang' => $request->namaBarang,
            'harga' => $request->harga,
            'stok' => $request->stok
        ];
        //ekseksusi insert model
        $barang->insertData($data);

        return response()->json([
            "message" => "Barang berhasil ditambahkan!"
        ], 201);
    }
}