<?php

namespace App\View\Components;

use Auth;
use Illuminate\View\Component;

use DB;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        if(Auth::guard('admin')->check()){

            $admin_id = Auth::guard('admin')->id();
            $admin = DB::table('admins')
            ->where('id', $admin_id)
            ->select('id', 'admin_name as name', 'admin_email as email')
            ->first();

            return view('components.sidebar', ['auth_user' => $admin]);

        }elseif(Auth::guard('department')->check()){


            $department_id = Auth::guard('department')->id();

            $department = DB::table('departments')
            ->where('department_key', $department_id)
            ->select('id', 'department_name as name', 'department_key as email')
            ->first();   


            return view('components.sidebar', ['auth_user' => $department]);
        }

        // $admin_id = Auth::guard('admin')->id();
        // $admin = DB::table('admins')->where('id', $admin_id)->first();

        // return view('components.sidebar', ['admin' => $admin]);
    }
}
