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
}
