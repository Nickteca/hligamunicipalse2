<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CLiga extends BaseController {
    public function index() {
        //return redirect()->to(base_url("admin/liga"));
        return redirect()->route('VLigas');
        //return view('Admin/VLiga');
    }
}
