<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MEquipo;
use App\Models\MLiga;

class CEquipo extends BaseController {
    public function index() {
        $equipos = new MEquipo();
        $liga = new MLiga();
        $nligas = $liga->findAll();
        $nequipos = $equipos->findAll();
        return view('Admin/VEquipo', ['nligas' => $nligas, 'nequipos' => $nequipos]);
    }

    public function registrar_equipo() {
        $liga_seleccionada[] = $this->request->getPost('liga_seleccionada');
        dd($liga_seleccionada);
    }
}
