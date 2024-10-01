<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KanbanCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $grievance;

    public function __construct($grievance)
    {
        $this->grievance = $grievance;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.kanban-card');
    }
}
