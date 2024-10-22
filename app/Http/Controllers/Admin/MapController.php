<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use DB;

class MapController extends Controller
{
    public function index()
    {

        $facility_grievances = DB::table('grievances')
            ->where('category', '=', 'Facility')
            ->where('status', '!=', value: 'Closed')
            ->get();

        $facility_grievances->each(function ($grievance, $index) {
            $grievance->index = $index + 1;
        });

        return view('admin.map', [
            'facility_grievances' => $facility_grievances
        ]);
    }
}
