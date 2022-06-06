<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = 'false';

    public function addUser($data)
    {
        $result = DB::insert('insert into users 
                (id, email, password, init_password, role_id, created_at, updated_at)
                values (?, ?, ?, ?, ?, ?)', [
                $data['username'],
                $data['email'], 
                password_hash($data['password']), 
                $data['password'], 
                $data['role'],
                $data['createdAt'],
                $data['updatedAt']]);

        return $result;
    }
}
