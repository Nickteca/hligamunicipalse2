<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MEquipo;
use App\Models\MLiga;

class CEquipo extends BaseController {
    public function index() {
        $equipos = new MEquipo();
        $liga = new MLiga();
        $nligas['nligas'] = $liga->findAll();
        $nequipos['nequipos'] = $equipos->findAll();
        return view('Admin/VEquipo', $nequipos, $nligas);
    }
}
