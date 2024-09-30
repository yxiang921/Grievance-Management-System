<?php

namespace App\Repositories;

use DB;

class GrievanceRepo
{
    public function getTotal()
    {
        return DB::table('grievances')
            ->count();
    }

    public function getMonthly()
    {
        return DB::table('grievances')
            ->where('created_at', '>=', now()->subMonth())
            ->count();
    }

    public function getTotalByStatus($status)
    {
        return DB::table('grievances')
            ->where('status', $status)
            ->count();
    }

    public function getTotalByCategory($category)
    {
        return DB::table('grievances')
            ->where('category', $category)
            ->count();
    }

    public function getGrievanceEachMonth()
    {
        return DB::table('grievances')
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
                DB::raw('COUNT(*) as grievance_count')
            )
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
            ->orderBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'), 'desc')
            ->get();
    }

    public function getMonthlyClosed()
    {
        return DB::table('grievances')
            ->where('status', 'Closed')
            ->where('created_at', '>=', now()->subMonth())
            ->count();
    }

}