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
            ]
        ];

        return view('admin.analytics', [
            'analytics' => $analytics,
        ]);
    }
}

// $pending_count = Proposal::where("status", "pending")->get()->count();

//         $approved_count = Proposal::where("status", "Accepted")->get()->count();
//         $rejected_count = Proposal::where("status", "Rejected")->get()->count();
//         $total_proposal = Proposal::all()->count();

//         $sport_count = Proposal::where('category', 'sport')->get()->count();
//         $art_count = Proposal::where('category', 'art')->get()->count();

//         $barChartData = [
//             'labels' => ['Pending', 'Approved', 'Rejected'],
//             'data' => [$pending_count, $approved_count, $rejected_count],
//         ];

//         $pieChartData = [
//             'labels' => ['Sport', 'Art'],
//             'data' => [$sport_count, $art_count],
//         ];

//         return view(
//             'admin.dashboard',
//             compact(
//                 'barChartData',
//                 'pieChartData',
//                 'pending_count',
//                 'approved_count',
//                 'rejected_count',
//                 'total_proposal'
//             )
//         );