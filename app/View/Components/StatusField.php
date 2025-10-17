<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StatusField extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message, $value, $column;
    public function __construct($value = 0, $message = null, $column = 4)
    {
        $this->value = $value;
        $this->message = $message;
        $this->column = $column;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.status-field');
    }
}
