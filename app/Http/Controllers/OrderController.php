<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use Illuminate\Support\Str;
use App\Models\KaryawanModel;
use App\Models\AdminModel;
use App\Models\ProdukModel;

class OrderController extends Controller
{
    //
    function getAll($inputSuccess = '')
    {
        $order = new OrderModel();
        $rows = $order->getAll();
        return view('tabel/v_tabelstok', [
            'rows' => $rows,
            'inputSuccess' => $inputSuccess,
            'deleteSuccess' => '']);
    }

    function getById(Request $request, $id)
    {
        $order = new OrderModel();
        $rows = $order->getDetail($id);
        return view('tabel/v_tabeldetailstok', [
            'rows' => $rows]);
    }

    function updateById(Request $request, $id)
    {
        $order = new OrderModel();
        $karyawan = new KaryawanModel();
        $admin = new AdminModel();
        $produk = new ProdukModel();

        $karyawanData = $karyawan->getAll();
        $adminData = AdminModel::all();
        $produkData = ProdukModel::all();
        $rows = $order->getDetail($id);
        return view('form/vf_orderstok', [
            'data' => $rows->first(),
            'update' => true,
            'karyawan' => $karyawanData,
            'admin' => $adminData,
            'produk' => $produkData]);
    }

    function deleteById(Request $request, $id)
    {
        $order = OrderModel::find($id);
        $order->delete();
        $order = new OrderModel();
        $rows = $order->getAll();
        return view('tabel/v_tabelstok', [
            'rows' => $rows,
            'inputSuccess' => '',
            'deleteSuccess' => "success"]);
    }

    function formData($alert = [])
    {
        $order = new OrderModel();
        $karyawan = new KaryawanModel();
        $admin = new AdminModel();
        $produk = new ProdukModel();

        $karyawanData = $karyawan->getAll();
        $adminData = AdminModel::all();
        $produkData = ProdukModel::all();
        
        return view('form/vf_orderstok', [
            'karyawan' => $karyawanData,
            'admin' => $adminData,
            'produk' => $produkData,
            'update' => false
        ]);
    }

    public function addData(Request $request)
    {
        $order = new OrderModel;

        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'karyawanKtp' => 'required',
            'adminKtp' => 'required',
            'produkId' => 'required',
            'keterangan' => 'required',
            'jumlahItem' => 'required|numeric',
            'hargaItem' => 'required|numeric',
        ]);

        $data = [
            'karyawanKtp' => $request->input('karyawanKtp'),
            'adminKtp' => $request->input('adminKtp'),
            'produkId' => $request->input('produkId'),
            'tanggal' => date('Y-m-d'),
            'keterangan' => $request->input('keterangan'),
            'jumlahItem' => $request->input('jumlahItem'),
            'hargaItem' => $request->input('hargaItem'),
            
        ];
    
        //model order
        $order->karyawan_ktp = $data['karyawanKtp'];
        $order->admin_ktp = $data['adminKtp'];
        $order->produk_id = $data['produkId'];
        $order->tanggal = $data['tanggal'];
        $order->keterangan = $data['keterangan'];
        $order->jumlah_item = $data['jumlahItem'];
        $order->harga_item = $data['hargaItem'];
        $order->save();
        $inputSuccess = 'success';

        return $this->getAll($inputSuccess);
    }

    function insertData(Request $request)
    {
        $karyawan = new KaryawanModel;
        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'ktp' => 'required|min:16|max:16',
            'username' => 'required',
            'email' => 'required',
            'cabang' => 'required',
            'nama' => 'required',
            'telp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $data = [
            'username' => $request->input('username'),
            'ktp' => $request->input('ktp'),
            'email' => $request->input('email'),
            'cabang' => $request->input('cabang'),
            'nama' => $request->input('nama'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'password' => Str::random(10)
        ];

        $cekUsername = $karyawan->usernameExist($data['username']);
        $cekEmail = $karyawan->emailExist($data['email']);
        $cekKtp = $karyawan->ktpExist($data['ktp']);
    
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
            $process = $karyawan->insert($data);
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
