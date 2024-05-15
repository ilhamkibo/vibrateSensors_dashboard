<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Logs;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function getLogs(Request $request)
    {
        $startDate = $request->query('startDate');
        $endDate = $request->query('endDate');


        $logs = Logs::all();

        return response()->json([
            'status' => 'success',
            'data' => $logs
        ]);
    }
}
