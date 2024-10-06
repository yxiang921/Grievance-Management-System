<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Repositories\DepartmentGrievanceRepo;
use Auth;

class HomeController extends Controller
{
    protected $grievanceRepo;
    public function __construct(DepartmentGrievanceRepo $grievanceRepo)
    {
        $this->grievanceRepo = $grievanceRepo;
    }

    public function index()
    {

        $department_id = Auth::guard('department')->user()->id;

        $grievanceRepo = $this->grievanceRepo;
        $status = ['Received', 'In Progress', 'Closed'];

        foreach ($status as $s) {
            $recent_by_status[$s] = $grievanceRepo->getRecentByStatus($s);
        }

        $monthly_grievance = $grievanceRepo->getMonthly();
        $monthly_closed = $grievanceRepo->getMonthlyByStatus('Closed');
        $total_grievance = $grievanceRepo->getTotal();
        $total_closed = $grievanceRepo->getTotalByStatus('Closed');

        return view('admin.home', [
            'monthly_grievance' => $monthly_grievance,
            'monthly_closed' => $monthly_closed,
            'total_grievance' => $total_grievance,
            'total_closed' => $total_closed,
            'recent_by_status' => $recent_by_status,
        ]);
    }
}
