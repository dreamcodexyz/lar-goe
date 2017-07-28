<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class Advanced extends Controller
{
    public function execute()
    {
        $data = ['page_title' => 'Advanced Setting'];
        return view('pages.settings.advanced', $data);
    }

    static function routes() {
        Route::group(array('prefix' => '/settings/advanced'), function() {
            Route::get('/{id?}', array('as' => 'id', 'uses' => 'Settings\Advanced@execute'));
        });
    }
}