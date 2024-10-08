<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Grievance;
use Auth;
use DB;
use Str;

class GrievanceController extends Controller
{
    public function __construct()
    {

    }

    public function getAllGrievances()
    {

        $department_id = Auth::guard('department')->user()->id;

        $grievances = DB::table('grievances')
            ->where('department_id', $department_id)
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select('grievances.id as grievance_id', 'grievances.*', 'users.*', 'users.id as user_id')
            ->get();

        return view('department.grievances', ['grievances' => $grievances]);
    }

    public function getGrievance($grievance_id)
    {
        $grievance = DB::table('grievances')

            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select(
                'grievances.id as grievance_id',
                'grievances.*',
                'users.id as user_id',
                'users.*',
                'grievances.created_at as grievance_created_at'
            )
            ->where('grievances.id', '=', $grievance_id)
            ->get();


        return view('department.grievanceDetail', [
            'grievance' => $grievance,
        ]);
    }

    public function updateGrievance()
    {
        $req = request();
        $grievance_id = $req->input('grievanceID');
        $grievance = Grievance::find($grievance_id);

        $validateData = $req->validate([
            'status' => 'required',
            'process_remark' => 'required',
            'process_image' => 'required'
        ]);


        $image_path = null;

        if (
            $req->hasFile('process_image')
        ) {
            $image = $req->file('process_image');
            $extension = $image->getClientOriginalExtension();

            $filename = Str::uuid() . '.' . $extension;
            $image_path = $image->storeAs('process_image_', $filename, 'public');

            $grievance->process_image = $image_path;
        }

        $grievance->status = $validateData['status'];
        $grievance->process_remark = $validateData['process_remark'];

        $grievance->save();

        return redirect()->route('department.grievance.detail', [
            'grievance_id' => $grievance_id
        ]);
    }

}
