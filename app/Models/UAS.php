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

    public function tambahTransaksi($idBarang, $idPembeli, $keterangan)
    {
        $this->insert([
            'id_barang' => $idBarang,
            'id_pembeli' => $idPembeli,
            'tanggal' => date('Y-m-d'),
            'keterangan' => $keterangan
        ]);
    }
}

