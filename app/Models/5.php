<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    //untuk mengeksekusi update data
    public function update(Request $request)
    {
        //instansiasi model transaksi
        $transaksi = new Transaksi();

        $data = [
            'idTransaksi' => $request->input(''),
            '$idBarang' => $request->input('idBarang'),
            'idPembeli' => $request->input('idPembeli'),
            'tanggal' => date('Y-m-d'),
            'keterengan' => $request->input('keterangan')
        ];
        //ekseksusi update model
        $transaksi->updateData($data);

        return view('form.update', [
            'isSuccess' => true
        ]);
    }
    
    //untuk menampilkan formulir updaet data
    public function formUpdate(Request $request)
    {
        
        //instansiasi model transaksi
        $transaksi = new Transaksi();
        //mengambil id transaksi dari request
        $idTransaksi = $request->input('idTransaksi');
        //mengambil record berdasarkan id transaksi (sudah diimplementasikan pada class model pada nomor 4)
        $record =  $idTransaksi->getRecordById($idTransaksi)->toArray();

        $data = [
            'idTransaksi' => $idTransaksi,
            '$idBarang' => $record['idBarang'],
            'idPembeli' => $record['idPembeli'],
            'tanggal' => $record['tanggal'],
            'keterengan' => $record['keterangan']
        ];

        return view('form.update', [
            'data' => $data
        ]);
    }
}