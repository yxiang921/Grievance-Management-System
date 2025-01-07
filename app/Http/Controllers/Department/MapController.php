<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class MapController extends Controller
{
    public function index()
    {

        $map_grievances = DB::table('grievances')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->where('latitude', '!=', 0)
            ->where('longitude', '!=', 0)
            ->where('status', '!=', 'closed')
            ->get();

        $map_grievances->each(function ($grievance, $index) {
            $grievance->index = $index + 1;
        });

        return view('department.map', [
            'map_grievances' => $map_grievances
        ]);
    }
}
