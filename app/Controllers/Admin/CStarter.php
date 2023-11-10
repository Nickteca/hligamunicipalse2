<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CStarter extends BaseController {
    public function index() {
        $ligas = model('MLiga');
        $nLigas['nligas'] = $ligas->findAll();
        return view("Admin/VStarter", $nLigas);
    }
}
