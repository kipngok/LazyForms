<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
    public $name;
    public $type;
    public $label;

    public function __construct($value, $name, $type, $label)
    {
        //
        $this->value=$value;
        $this->name=$name;
        $this->type=$type;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
