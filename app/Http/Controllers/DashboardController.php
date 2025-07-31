<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalReports = Report::count();
        $pending = Report::where('status', 'pending')->count();
        $proses = Report::where('status', 'proses')->count();
        $selesai = Report::where('status', 'selesai')->count();

        return view('admin.dashboard', compact(
            'totalReports',
            'pending',
            'proses',
            'selesai'
        ));
    }
}
