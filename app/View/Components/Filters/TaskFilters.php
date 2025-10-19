<?php

namespace App\View\Components\Filters;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TaskFilters extends Component
{
    public $entity, $filters;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($entity, $filters)
    {
        $this->entity = $entity;
        $this->filters = $filters;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filters.task-filters');
    }
}
