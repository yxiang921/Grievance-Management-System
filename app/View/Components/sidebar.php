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
        $admin_id = Auth::id();
        $admin = DB::table('admins')->where('id', $admin_id)->first();

        return view('components.sidebar', ['admin' => $admin]);
    }
}
