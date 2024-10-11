<?php

namespace App\Repositories;

use Auth;
use DB;

class DepartmentGrievanceRepo
{

    public function __construct()
    {

    }

    public function getTotal()
    {

        $department_id = Auth::guard('department')->user()->id;

        return DB::table('grievances')
            ->where('department_id', $department_id)
            ->count();
    }

    public function getTotalByStatus($status)
    {

        $department_id = Auth::guard('department')->user()->id;
        return DB::table('grievances')
            ->where('status', $status)
            ->where('department_id', $department_id)
            ->count();
    }

    public function getTotalByCategory($category)
    {

        $department_id = Auth::guard('department')->user()->id;
        return DB::table('grievances')
            ->where('category', $category)
            ->where('department_id', $department_id)
            ->count();
    }

    public function getGrievanceEachMonth()
    {

        $department_id = Auth::guard('department')->user()->id;
        return DB::table('grievances')
            ->where('department_id', $department_id)
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
                DB::raw('COUNT(*) as grievance_count')
            )
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
            ->orderBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'), 'asc')
            ->get();
    }

    public function getMonthly()
    {

        $department_id = Auth::guard('department')->user()->id;
        return DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('created_at', '>=', now()->subMonth())
            ->count();
    }

    public function getMonthlyByStatus($status)
    {

        $department_id = Auth::guard('department')->user()->id;
        return DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('status', $status)
            ->where('created_at', '>=', now()->subMonth())
            ->count();
    }

    public function getRecentByStatus($status)
    {

        $department_id = Auth::guard('department')->user()->id;

        $grievance = DB::table('grievances')
        ->where('department_id', $department_id)
        ->select(
            'grievances.*',
            'grievances.id as grievance_id',
            'users.*',
            'users.id as user_id',
            'grievances.created_at as grievance_created_at'
        )
        ->where('status', $status)
        ->join('users', 'grievances.user_id', '=', 'users.id')
        ->orderBy('grievances.created_at', 'desc')
        ->limit(3)
        ->get();

        return $grievance;

    }

    public function calPctChange()
    {

        $department_id = Auth::guard('department')->user()->id;

        $currentMonth = DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('created_at', '>=', now()->subMonth())
            ->count();

        $previousMonth = DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('created_at', '>=', now()->subMonths(2))
            ->where('created_at', '<', now()->subMonth())
            ->count();

        if ($previousMonth == 0) {
            return 100;
        }

        return (($currentMonth - $previousMonth) / $previousMonth) * 100;
    }

    public function calPctBasedStatus($status)
    {

        $department_id = Auth::guard('department')->user()->id;
        $currentMonthBasedStatus = DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('status', $status)
            ->where('created_at', '>=', now()->subMonth())
            ->count();

        $previousMonthBasedStatus = DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('status', $status)
            ->where('created_at', '>=', now()->subMonths(2))
            ->where('created_at', '<', now()->subMonth())
            ->count();

        if ($previousMonthBasedStatus == 0) {
            return 100;
        }

        return (($currentMonthBasedStatus - $previousMonthBasedStatus) / $previousMonthBasedStatus) * 100;
    }

    public function calPctTotalBasedStatus($status)
    {

        $department_id = Auth::guard('department')->user()->id;
        $totalGrievances = DB::table('grievances')
            ->where('department_id', $department_id)
            ->count();

        $totalGrievancesBasedStatus = DB::table('grievances')
            ->where('department_id', $department_id)
            ->where('status', $status)
            ->count();

        if($totalGrievances == 0) {
            return 0;
        }

        $totalPct = ($totalGrievancesBasedStatus / $totalGrievances) * 100;

        return $totalPct;
    }

}