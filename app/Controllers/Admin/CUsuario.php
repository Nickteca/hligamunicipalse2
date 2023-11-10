<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CUsuario extends BaseController {
    public function index() {

    }
    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}
