<?php

namespace App\Http\Controllers;

use App\Models\Quote;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function quotes() {
        return view('content.quotes', [
            'title' => 'Quotes',
            // quotes mengambil data dari model quote yang mempunyai method all
            'quotes' => Quote::paginate(8),
        ]);
    }
}
