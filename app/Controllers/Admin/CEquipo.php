<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MEquipo;
use App\Models\MLiga;

class CEquipo extends BaseController {
    protected $ligas;
    public function __construct() {
        $this->ligas = new MLiga();
    }
    public function index() {
        $equipos = new MEquipo();
        $liga = new MLiga();
        $nligas = $this->ligas->findAll();
        $nequipos = $equipos->findAll();
        return view('Admin/VEquipo', ['nligas' => $nligas, 'nequipos' => $nequipos]);
    }

    public function registrar_equipo() {
        //print_r($this->request->getPost('liga_seleccionada'));
        //var_dump($this->request->getPost());
        $validaciones = service('validation');
        //print_r($this->ligas->select('nombre_liga')->findAll());
        //implode(',', $this->ligas->select('nombre_liga')->findAll());
        $opcionesPermitidas = array_map('intval', array_column($this->ligas->select('id_liga')->findAll(), 'id_liga'));
        $opcionesString = implode(',', $opcionesPermitidas);
        $validaciones->setRules([
            'nombre_equipo' => 'required|max_length[50]|alpha_space|is_unique[equipo.nombre_equipo]',
            //'liga_seleccionada[]' => 'in_list[5,6,7,8]'
        ]);
        //echo count($this->request->getPost('liga_seleccionada'));
        /*if (empty($this->request->getPost('liga_seleccionada'))) {
            return redirect()->back()->with('errores', 'Debes seleccionar al menos unaliga');
        }*/
        //dd($this->request->getPost('liga_seleccionada'));
        var_dump($this->request->getPost('liga_seleccionada'));
        if (!$validaciones->withRequest($this->request)->run()) {
            //dd($validaciones->getErrors());
            return redirect()->back()->withInput()->with('errors', $validaciones->getErrors());
        } else {
            dd($this->request->getPost('liga_seleccionada'));
        }

        /*$liga_seleccionada[] = $this->request->getPost('liga_seleccionada');
        dd($liga_seleccionada);*/
    }
}
