<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class General extends Controller
{
    public function execute()
    {
        $data = ['page_title' => 'General Settings'];
        return view('pages.settings.general', $data);
    }
}

