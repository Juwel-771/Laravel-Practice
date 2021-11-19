<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navigation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $desig;
    public $tool;
    public $bod;
    public $foot;
    public $renam;
    public function __construct($desig ,$tool ,$bod,$foot,$renam)
    {
        $this->desig=$desig;
        $this->tool=$tool;
        $this->bod=$bod;
        $this->foote=$foot;
        $this->renam=$renam;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
