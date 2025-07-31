<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportManagementController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();
        return view('admin.reports.index', compact('reports'));
    }

    public function edit($id)
    {
        $report = Report::findOrFail($id);
        return view('admin.reports.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,proses,selesai',
        ]);

        $report = Report::findOrFail($id);
        $report->status = $request->status;
        $report->save();

        return redirect()->route('admin.reports.index')->with('success', 'Status laporan berhasil diperbarui.');
    }
}
