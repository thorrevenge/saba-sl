<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'Product_ID';
 
    protected $returnType     = 'object';
    protected $useSoftDeletes = true;
 
    protected $allowedFields = ['Nama_Produk', 'Harga'];
 
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
 
    protected $validationRules    = [
        'Nama_Produk'     => 'required|min_length[3]',
        'Harga'        => 'required|numeric',
    ];
 
    protected $validationMessages = [
        'Nama_Produk'        => [
            'required' => 'Nama Produk',
            'min_length' => 'Minimal 3 Karakter'
        ],
        'Harga'        => [
            'required' => 'Bagian Harga Harus diisi',
            'numeric' => 'Hanya bisa diisi dengan angka'
        ]
    ];
    protected $skipValidation  = false;
 
    public function getData()
    {
        return 'Ini adalah Method getData didalam ProductModel';
    }
}