<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Repositories\GrievanceRepo;

class HomeController extends Controller
{
    protected $grievanceRepo;
    public function __construct(GrievanceRepo $grievanceRepo)
    {
        $this->grievanceRepo = $grievanceRepo;
    }

    public function index()
    {

        $grievanceRepo = $this->grievanceRepo;

        $monthly_grievance = $grievanceRepo->getMonthly();
        $monthly_closed = $grievanceRepo->getMonthlyClosed();
        $total_grievance = $grievanceRepo->getTotal();
        $total_closed = $grievanceRepo->getTotalByStatus('Closed');

        return view('admin.home', [
            'monthly_grievance' => $monthly_grievance,
            'monthly_closed' => $monthly_closed,
            'total_grievance' => $total_grievance,
            'total_closed' => $total_closed,
        ]);
    }
}
