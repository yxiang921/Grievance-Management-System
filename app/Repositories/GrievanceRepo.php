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


}