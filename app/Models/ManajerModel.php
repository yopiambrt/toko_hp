<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ManajerModel extends Model
{
    use HasFactory;
    
    function getAll()
    {
        $data = DB::table('manajer')
                ->join('users', 'users.id', '=', 'manajer.user_id')
                ->select('*')
                ->orderBy('manajer.nama')
                ->get();
        return $data;
    }

    function insert($data)
    {
        
        $user = new UserModel();
        $result = [];
    
        $result[1] = $user->addUser($data);

        $result[0] = DB::insert('insert into manajer 
            (ktp, user_id, nama, telp, alamat) 
            values (?, ?, ?, ?, ?)', [
            $data['ktp'],
            $data['username'], 
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
        
        $result = DB::table('manajer')
                ->select('*')
                ->where('ktp', '=', $ktp)
                ->first();
        return $result;
    }
}
