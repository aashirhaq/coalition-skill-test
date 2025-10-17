<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id, $entity;
    public function __construct($id, $entity)
    {
        $this->id = $id;
        $this->entity = $entity;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.edit-button');
    }
}
