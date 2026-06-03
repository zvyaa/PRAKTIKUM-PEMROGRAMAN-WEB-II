<?php
namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    public function getProfil()
    {
        return [
            'nama'     => 'Amandha Citra Mustika',
            'nim'      => '2410817320004',
            'institut' => 'Universitas Lambung Mangkurat',
            'prodi'    => 'Teknologi Informasi',
            'hobi'     => 'Bermain Game, Membaca, Mendengarkan Musik',
            'skill'    => 'PHP, HTML, CSS, C, Python',
            'asal'     => 'Banjarbaru',
        ];
    }
}