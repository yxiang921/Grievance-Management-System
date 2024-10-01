<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Repositories\GrievanceRepo;

class AnalyticsController extends Controller
{

    protected $grievanceRepo;

    public function __construct(GrievanceRepo $grievanceRepo)
    {
        $this->grievanceRepo = $grievanceRepo;
    }

    public function getAnalytics()
    {
        $analytics = [
            'total_grievances' => $this->grievanceRepo->getTotal(),
            'total_pending' => $this->grievanceRepo->getTotalByStatus('Received'),
            'total_in_progress' => $this->grievanceRepo->getTotalByStatus('In Progress'),
            'total_closed' => $this->grievanceRepo->getTotalByStatus('Closed'),

            'monthly_grievances' => $this->grievanceRepo->getMonthly(),

            'category_data' => [
                'labels' => ['Academic', 'Facility', 'Finance', 'Behaviour', 'Other'],
                'data' => [
                    $this->grievanceRepo->getTotalByCategory('Academic'),
                    $this->grievanceRepo->getTotalByCategory('Facility'),
                    $this->grievanceRepo->getTotalByCategory('Finance'),
                    $this->grievanceRepo->getTotalByCategory('Behaviour'),
                    $this->grievanceRepo->getTotalByCategory('Other'),
                ]
            ],

            'each_month_grievance' => $this->grievanceRepo->getGrievanceEachMonth(),
        ];

        // dd($this->grievanceRepo->getGrievanceEachMonth());

        return view('admin.analytics', [
            'analytics' => $analytics,
        ]);
    }
}