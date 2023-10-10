<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index()
    {
        $logs = DB::table('logs')->orderBy('created_at', 'desc')->paginate(10);

        return view('logs.index', ['logs' => $logs]);
    }
}
