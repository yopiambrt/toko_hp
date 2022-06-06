<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;

    protected $table = 'order_stok';
    protected $primaryKey = 'id';

    function getAll()
    {
        $data = $this->join('karyawan', 'karyawan.ktp', '=', 'order_stok.karyawan_ktp')
                ->join('admin', 'admin.ktp', '=', 'order_stok.admin_ktp')
                ->join('produk', 'produk.id', '=', 'order_stok.produk_id')
                ->select('order_stok.*', 'karyawan.nama as karyawan_nama', 'admin.nama as admin_nama', 'produk.nama as produk_nama')
                ->orderBy('produk.nama')
                ->get();
        return $data;
    }

    function getDetail($id)
    {
        $data = $this->join('karyawan', 'karyawan.ktp', '=', 'order_stok.karyawan_ktp')
                ->join('admin', 'admin.ktp', '=', 'order_stok.admin_ktp')
                ->join('produk', 'produk.id', '=', 'order_stok.produk_id')
                ->select('order_stok.*', 'karyawan.nama as karyawan_nama', 'admin.nama as admin_nama', 'produk.nama as produk_nama')
                ->orderBy('produk.nama')
                ->where('order_stok.id', '=', $id)
                ->get();
        return $data;
    }

    function insert($data)
    {
        $result = [];
    
        $result[1] = DB::insert('insert into users 
            (id, email, password, role_id)
            values (?, ?, ?, ?, ?, ?)', [
            $data['username'],
            $data['email'], 
            $data['password'], 
            1]);

        $result[0] = DB::insert('insert into karyawan 
            (ktp, user_id, cabang_id, nama, telp, alamat) 
            values (?, ?, ?, ?, ?, ?)', [
            $data['ktp'],
            $data['username'], 
            $data['cabang'],
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



    function usernameExist($username) 
    {
        $result = DB::table('users')
                ->select('*')
                ->where('id', '=', $username)
                ->first();
        return $result;
    }
    function emailExist($email) 
    {
        $result = DB::table('users')
                ->select('*')
                ->where('email', '=', $email)
                ->first();
        return $result;
    }
    function ktpExist($ktp)
    {
        
        $result = DB::table('karyawan')
                ->select('*')
                ->where('ktp', '=', $ktp)
                ->first();
        return $result;
    }
}
