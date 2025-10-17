<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormError extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $key;
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form-error');
    }
}
