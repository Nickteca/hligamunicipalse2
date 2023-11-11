<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CEquipo extends BaseController {
    public function index() {
        return view('Admin/VEquipo');
    }
}
