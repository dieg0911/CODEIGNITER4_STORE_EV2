<?php

namespace App\Models;  
use CodeIgniter\Model;

class InventarioModel extends Model {

    protected $table = 'products';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['NAME','DESCRIPTION','PRICE','STOCK'];

    public function mostrarProductos(){
        return $this->findALL();
    }
}


