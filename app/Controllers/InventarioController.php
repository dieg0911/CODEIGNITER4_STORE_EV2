<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InventarioModel;

class InventarioController extends BaseController
{
    public function index()
    {
        echo view('templates/header_admin');
        echo view('templates/navbar');
        $model = model('InventarioModel');
        $data['products'] = $model->mostrarProductos();
        echo view('inventario', $data);
        echo view('templates/footer_admin');
    }

    // add user form
    public function create()
    {
        return view('inventario_add');
    }

    // insert data
    public function store()
    {
        $userModel = new InventarioModel();
        $data = [
            'NAME' => $this->request->getVar('NAME'),
            'DESCRIPTION'  => $this->request->getVar('DESCRIPTION'),
            'PRICE' => $this->request->getVar('PRICE'),
            'STOCK' => $this->request->getVar('STOCK'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(base_url('/inventario'));
    }
    // show single user
    public function singleUser($id = null)
    {
        $userModel = new InventarioModel();
        $data['user_obj'] = $userModel->where('ID', $id)->first();
        
        return view('edit_view', $data);
    }
    // update user data
    public function update()
    {
        $userModel = new InventarioModel();
        $id = $this->request->getVar('ID');
        $data = [
            'NAME' => $this->request->getVar('NAME'),
            'DESCRIPTION'  => $this->request->getVar('DESCRIPTION'),
            'PRICE' => $this->request->getVar('PRICE'),
            'STOCK' => $this->request->getVar('STOCK'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('/inventario'));
    }
    // delete user
    public function delete($id = null)
    {
        $userModel = new InventarioModel;
        $data['user'] = $userModel->where('ID', $id)->delete($id);
        return $this->response->redirect(base_url('/inventario'));
    }
}
