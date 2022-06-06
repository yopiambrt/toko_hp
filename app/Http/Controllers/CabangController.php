<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CabangModel;
use App\Models\ManajerModel;

class CabangController extends Controller
{
    //
    function getAll($inputSuccess = '')
    {
        $cabang = new CabangModel();
        $rows = $cabang->getAll();
        return view('tabel/v_tabelcabang', [
            'rows' => $rows->toArray(),
            'inputSuccess' => $inputSuccess]);
    }

    function formData($alert = [])
    {
        $manajer = new ManajerModel();

        $textForm = [
            ['name' => 'cabangNama', 'title' => 'Nama Cabang','placeholder' => 'Masukkan nama cabang...'],
            ['name' => 'cabangTelp', 'title' => 'Nomor Telepon Cabang','placeholder' => 'Masukkan nomor telepon cabang...'],
            ['name' => 'cabangAlamat', 'title' => 'Alamat Cabang','placeholder' => 'Masukkan alamat cabang...'],
        ];
        
        $manajerList = $manajer->getAll();

        return view('form/vf_cabang', [
            'alert' => $alert,
            'textForm' => $textForm,
            'manajer' => $manajerList->toArray()
        ]);
    }

    function insertData(Request $request)
    {
        $cabang = new CabangModel;
        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'cabangNama' => 'required',
            'cabangTelp' => 'required|numeric',
            'cabangAlamat' => 'required',
            'manajer' => 'required'
        ]);

        $data = [
            'nama' => $request->input('cabangNama'),
            'telp' => $request->input('cabangTelp'),
            'alamat' => $request->input('cabangAlamat'),
            'manajerKtp' => $request->input('manajer')
        ];

        $process = $cabang->insert($data);
        if ($process)
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
