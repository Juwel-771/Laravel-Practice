<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $pass;
    public $rn;
    public $type;
    public function __construct( $name, $pass, $rn, $type)
    {
        $this->name=$name;
        $this->pass=$pass;
        $this->rn=$rn;
        $this->type=$type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
