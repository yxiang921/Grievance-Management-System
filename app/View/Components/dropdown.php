<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dropdown extends Component
{
    public $items;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->items = $items;
        // $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
