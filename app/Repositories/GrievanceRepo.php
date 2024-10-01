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
            ->orderBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'), 'asc')
            ->get();
    }

    public function getMonthlyClosed()
    {
        return DB::table('grievances')
            ->where('status', 'Closed')
            ->where('created_at', '>=', now()->subMonth())
            ->count();
    }

    public function getRecentByStatus($status)
    {
        return DB::table('grievances')
            ->select(
                'grievances.*',
                'users.*',
                'grievances.id as grievance_id',
                'users.id as user_id',
                'grievances.created_at as grievance_created_at'
            )
            ->where('status', $status)
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->orderBy('grievances.created_at', 'desc')
            ->limit(3)
            ->get();
    }

}