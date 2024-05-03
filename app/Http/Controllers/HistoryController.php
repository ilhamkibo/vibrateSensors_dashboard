<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function render()
    {
        return view('contents.history', [
            'header' => 'Logs History Page'
        ]);
    }
}
