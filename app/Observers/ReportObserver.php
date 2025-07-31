<?php

namespace App\Observers;

use App\Models\Report;
use App\Mail\ReportStatusUpdated;
use Illuminate\Support\Facades\Mail;

class ReportObserver
{
    public function updated(Report $report)
    {
        if ($report->isDirty('status')) {
            Mail::to($report->email)->send(new ReportStatusUpdated($report));
        }
    }
}
