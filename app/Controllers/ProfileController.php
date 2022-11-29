<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();

        $data['user'] = ['name' => $session->get('name'), 'rol' => $session->get('rol')];
        // die(var_dump($data));

        echo view ('templates/header', $data);
        echo view ('admin', $data);
       //  echo view ('inventario');
       //  echo view ('templates/navbar');
       //  echo view ('templates/sidebar');
         echo view ('templates/footer');
    }

    // public function admin()
    // {
    //     return   view('Templates/header')
    //     . view('admin')
    //     . view('Templates/footer');
    // }
}