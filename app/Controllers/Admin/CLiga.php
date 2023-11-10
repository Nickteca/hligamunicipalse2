<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MLiga;

class CLiga extends BaseController {
    public function index() {
        $ligas = new MLiga();
        $nligas['nligas'] = $ligas->findAll();
        return view('Admin/VLiga', $nligas);
    }
    public function registrar_liga() {
        $validaciones = service('validation');
        $validaciones->setRules([
            'nombre_liga' => 'required|max_length[50]|alpha_space',
            'descripcion_liga' => 'required|max_length[100]|alpha_space',
            'logo' => 'required'
        ]);
        if (!$validaciones->withRequest($this->request)->run()) {
            //dd($validaciones->getErrors());
            return redirect()->back()->withInput()->with('errors', $validaciones->getErrors());
        } else {

            $liga = [
                "nombre_liga" => $this->request->getPost('nombre_liga'),
                "logo" => $this->request->getPost('logo')
            ];
            $mliga = new MLiga();
            $mliga->save($liga);
            return redirect()->route('VLigas');
        }
    }
}
