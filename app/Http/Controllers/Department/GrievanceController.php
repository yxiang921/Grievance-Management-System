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

        // dd($grievance);


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
            'person_in_charged' => 'required',
            'process_remark' => 'required',
            'process_image' => 'nullable'
        ]);


        $image_path = null;

        if (
            $req->hasFile('process_image')
        ) {
            $image = $req->file('process_image');
            $extension = $image->getClientOriginalExtension();

            $filename = Str::uuid() . '.' . $extension;
            $image_path = $image->move(public_path('process_images'), $filename);

            $grievance->process_image = $filename;
        }

        $grievance->status = $validateData['status'];
        $grievance->person_in_charged = $validateData['person_in_charged'];
        $grievance->process_remark = $validateData['process_remark'];

        $grievance->updated_at = now();

        if ($grievance->status == 'closed') {
            $grievance->closed_at = now();
        }

        $grievance->save();

        $this->flashMessage('success', 'Grievance Updated Successfully!');

        return redirect()->route('department.grievances');
    }


    public function searchGrievance()
    {

        $req = request();
        $keyword = $req->input('keyword');
        $datetime = $req->input('datetime');
        $status = $req->input('status');

        $query = DB::table('grievances')
            ->join('users', 'grievances.user_id', '=', 'users.id')
            ->select('grievances.id as grievance_id', 'grievances.*', 'users.*', 'users.id as user_id')
            ->where('department_id', Auth::guard('department')->user()->id);

        if ($keyword != null && $keyword != '') {
            $query->where(function ($q) use ($keyword) {
                $q->where('title', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('description', 'LIKE', '%' . $keyword . '%');
            });
        }

        if ($datetime != null && $datetime != '') {
            $query->where('grievances.created_at', '>=', $datetime);
        }

        if ($status != null && $status != '') {
            $query->where('grievances.status', '=', $status);
        }

        $grievances = $query->orderBy('grievances.status', 'desc')->get();

        if($grievances->isEmpty()){
            $this->flashMessage('error', 'No Search Results Found');
        }else{
            $this->flashMessage('success', 'Search Results as Below');
        }

        return view('department.grievances', [
            'grievances' => $grievances,
        ]);

    }
}
