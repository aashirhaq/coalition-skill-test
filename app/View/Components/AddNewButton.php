<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AddNewButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $entity;
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.add-new-button');
    }
}
