<?php

namespace App\Http\Services;

use App\Models\Project;

class ProjectService {

    protected $model;
    public function __construct()
    {
        $this->model = new Project();
    }

    public function fetch($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data)
    {
        extract($data);
        $record = $this->model;
        $record->title =  $title;
        $record->state_id = $state;
        $record->label = $label;
        $record->value = $value;
        $record->status = $status;
        $record->save();
        return $record;
    }

    public function edit($data, $id)
    {
        extract($data);
        $record = $this->fetch($id);
        $record->state_id = $state;
        $record->title = $title;
        $record->label = $label;
        $record->value = $value;
        $record->status = $status;
        $record->save();
        return $record;
    }

    public function all()
    {
        return $this->model->all();
    }
}
