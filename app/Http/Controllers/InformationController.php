<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function information() {
        return view('content.information', [
            'title' => 'Information',
        ]);
    }
}
