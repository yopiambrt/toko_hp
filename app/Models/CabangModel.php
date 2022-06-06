<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CabangModel extends Model
{
    use HasFactory;

    function getAll()
    {
        $data = DB::table('cabang')
                ->join('manajer', 'cabang.manajer_ktp', '=', 'manajer.ktp')
                ->select('cabang.id as cabangId', 
                    'cabang.nama as cabangNama', 
                    'cabang.telp as cabangTelp',
                    'cabang.alamat as cabangAlamat',
                    'manajer.ktp as manajerKtp',
                    'manajer.nama as manajerNama')
                ->orderBy('cabangNama')
                ->get();
        return $data;
    }
    
    function insert($data)
    {
        $result = DB::insert('insert into cabang 
        (manajer_ktp, nama, telp, alamat) 
        values (?, ?, ?, ?)', [
        $data['manajerKtp'],
        $data['nama'], 
        $data['telp'], 
        $data['alamat']]);


        return $result;
        /* CARA 2
        DB::table('produk')->insert([
            'kategori_id' => $data['kategori'],
            'nama' => $data['nama'],
            'stok' => $data['stok'],
            'harga' => $data['harga']
        ]);
        */
    }
    
    function getCabangNama()
    {
        $data = DB::table('cabang')
                ->select('id', 'nama')
                ->get();
        return $data;
    }
    
}
