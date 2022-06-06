<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManajerModel;
use Illuminate\Support\Str;

class ManajerController extends Controller
{
    //
    function getAll($inputSuccess = '')
    {
        $manajer = new ManajerModel();
        $rows = $manajer->getAll();
        return view('tabel/v_tabelmanajer', [
            'rows' => $rows->toArray(),
            'inputSuccess' => $inputSuccess]);
    }

    function formData($alert = [])
    {
        return view('form/vf_manajer', [
            'alert' => $alert
        ]);
    }

    function insertData(Request $request)
    {
        $manajer = new ManajerModel;
        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'ktp' => 'required|min:16|max:16',
            'username' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'telp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $data = [
            'username' => $request->input('username'),
            'ktp' => $request->input('ktp'),
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'role' => 1,
            'createdAt' => Date('Y-m-d'),
            'updatedAt' => Date('Y-m-d'),
            'password' => Str::random(10)
        ];

        $cekUsername = $manajer->usernameExist($data['username']);
        $cekEmail = $manajer->emailExist($data['email']);
        $cekKtp = $manajer->ktpExist($data['ktp']);
    
        //cek keunikan username dan email
        if ($cekUsername || $cekEmail || $cekKtp) 
        {
            $alert = [
                'username' => 0,
                'email' => 0
            ];
            if ($cekUsername) $alert['username'] = 1;
            if ($cekEmail) $alert['email'] = 1;
            if ($cekKtp) $alert['ktp'] = 1;
            return $this->formData($alert);
        }
        else
        {   
            $process = $manajer->insert($data);
            if ($process[0] && $process[1])
            {
                $inputSuccess = 'success';
            }
            else
            {
                $inputSuccess = 'failed';
            }

        }
        return $this->getAll($inputSuccess);
    }
}
