<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Home extends BaseController {
    public function index(): string {
        return view('Front\welcome_message');
    }
}
