<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Logs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function render(Request $request)
    {

        $datas = Logs::where('device', 1)->get();
        $date = $request->input('date');
        $device = $request->input('device');

        if ($date || $device) {
            $datas = Logs::where('device', $device ? $device : "1")->whereDate('created_at', Carbon::parse($date ? $date : "today"))->limit(100)->get();
        }

        return view('contents.history', [
            'header' => 'Logs History Page',
            'datas' => $datas
        ]);
    }
}
