<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function __construct()
    {

    }

    public function getAnalytics()
    {
        // Total Grievances,
        // Monthly Grievances,
        // Total Closed,
        // Total in Progress
        $total_grievances = DB::table('grievances')->count();

        $total_closed = DB::table('grievances')
            ->where('status', 'Closed')
            ->count();

        $total_in_progress = DB::table('grievances')
            ->where('status', 'In Progress')
            ->count();

        $monthly_grievances = DB::table('grievances')->where(
            'created_at',
            '>=',
            now()->subMonth()
        )->count();

        $analytics_card = [
            'total_grievances' => $total_grievances,
            'total_closed' => $total_closed,
            'total_in_progress' => $total_in_progress,
            'monthly_grievances' => $monthly_grievances,
        ];

        return view('admin.analytics', [
            'analytics_card' => $analytics_card,
        ]);
    }
}
