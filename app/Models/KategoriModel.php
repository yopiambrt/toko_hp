<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriModel extends Model
{
    use HasFactory;
    
    function getAll()
    {
        $data = DB::table('kategori')
                ->get();
        return $data;
    }

    function getKategoriName()
    {
        $data = DB::table('kategori')
                ->select('id', 'nama')
                ->get();
        return $data;
    }
    
    function insert($data)
    {
        $result = DB::insert('insert into kategori 
            (nama, update_date) 
            values (?, ?)', [
            $data['nama'], 
            date('Y-m-d')]);

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
}
