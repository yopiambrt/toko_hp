<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $incrementing = true;

    public function insertData($data)
    {
        $this->insert([
            'id_barang' => $data['idBarang'],
            'id_pembeli' => $data['idPembeli'],
            'tanggal' => $data['tanggal'],
            'keterangan' => $data['keterangan']
        ]);
    }
    public function updateData($data)
    {
        $this->where('id_transaksi', $data['idTransaksi'])
            ->update([
            'id_barang' => $data['idBarang'],
            'id_pembeli' => $data['idPembeli'],
            'tanggal' => $data['tanggal'],
            'keterangan' => $data['keterangan']
        ]);
    }
    public function getRecordById($id)
    {
        $result = $this->where('id_transaksi', $id)
                        ->select('*')
                        ->get();
        return $result;
    }
}