<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;


class KategoriController extends Controller
{
    //
    function getAll($inputSuccess = '')
    {
        $kategori = new KategoriModel();
        $rows = $kategori->getKategoriName();
        return view('tabel/v_tabelkategori', [
            'rows' => $rows->toArray(),
            'inputSuccess' => $inputSuccess]);
    }

    function formData()
    {
        $kategori = new KategoriModel();
        return view('form/vf_kategori', []);
    }

    function insertData(Request $request)
    {
        $kategori = new KategoriModel;
        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'nama' => 'required'
        ]);


        $data = [
            'nama' => $request->input('nama'),
        ];

        if ($kategori->insert($data))
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
