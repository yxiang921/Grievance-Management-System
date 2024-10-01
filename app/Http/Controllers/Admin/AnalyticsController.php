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
        $grievanceRepo = $this->grievanceRepo;

        $analytics = [
            'total_grievances' => $grievanceRepo->getTotal(),
            'total_pending' => $grievanceRepo->getTotalByStatus('Received'),
            'total_in_progress' => $grievanceRepo->getTotalByStatus('In Progress'),
            'total_closed' => $grievanceRepo->getTotalByStatus('Closed'),

            'monthly_grievances' => $grievanceRepo->getMonthly(),
            'monthly_pending' => $grievanceRepo->getMonthlyByStatus('Received'),
            'monthly_in_progress' => $grievanceRepo->getMonthlyByStatus('In Progress'),
            'monthly_closed' => $grievanceRepo->getMonthlyByStatus('Closed'),

            'category_data' => [
                'labels' => ['Academic', 'Facility', 'Finance', 'Behaviour', 'Other'],
                'data' => [
                    $grievanceRepo->getTotalByCategory('Academic'),
                    $grievanceRepo->getTotalByCategory('Facility'),
                    $grievanceRepo->getTotalByCategory('Finance'),
                    $grievanceRepo->getTotalByCategory('Behaviour'),
                    $grievanceRepo->getTotalByCategory('Other'),
                ]
            ],

            'each_month_grievance' => $grievanceRepo->getGrievanceEachMonth(),

            'month_percentage_change' => $grievanceRepo->calPctChange(),
            'pending_percentage_change' => $grievanceRepo->calPctBasedStatus('Received'),
            'in_progress_percentage_change' => $grievanceRepo->calPctBasedStatus('In Progress'),
            'closed_percentage_change' => $grievanceRepo->calPctBasedStatus('Closed'),

            'pending_percentage' => $grievanceRepo->calPctTotalBasedStatus('Received'),
            'in_progress_percentage' => $grievanceRepo->calPctTotalBasedStatus('In Progress'),
            'closed_percentage' => $grievanceRepo->calPctTotalBasedStatus('Closed'),
        ];

        return view('admin.analytics', [
            'analytics' => $analytics,
        ]);
    }
}