<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = "produk";
    protected $primaryKey = 'id';

    function getAll()
    {
        $data = DB::table('produk')
                ->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
                ->select('kategori.nama as kategoriNama', 'produk.nama', 'produk.stok', 'produk.harga')
                ->orderBy('kategori.nama')
                ->orderBy('produk.nama')
                ->get();
        return $data;
    }

    function insert($data)
    {
        $result = DB::insert('insert into produk 
            (kategori_id, nama, stok, harga) 
            values (?, ?, ?, ?)', [
            $data['kategori'],
            $data['nama'], 
            $data['stok'], 
            $data['harga']]);

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
