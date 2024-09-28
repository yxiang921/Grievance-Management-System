<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterDropdown extends Component
{
    public $label;
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = 'Filter', $items = [])
    {
        $this->label = $label;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter-dropdown');
    }
}
