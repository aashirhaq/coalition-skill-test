<?php

namespace App\Http\Services;

use App\Models\Task;

class TaskService {

    protected $model;
    public function __construct()
    {
        $this->model = new Task();
    }

    public function list($relations = array())
    {
        $pagination = session()->get('pagination') ?? 10;
        return $this->model->with($relations)->orderby('priority', 'desc')->get();
    }

    public function fetch($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($data)
    {
        extract($data);

        $record = $this->model;
        $record->name = $name;
        $record->project_id = $project;
        $record->save();

        return $record;
    }

    public function edit($data, $id)
    {
        extract($data);

        $record = $this->fetch($id);
        $record->name = $name;
        $record->project_id = $project;
        $record->save();

        return $record;
    }

    public function updatePriority($data)
    {
        extract($data);

        foreach (explode(',', $sortedId) as $key => $id) {
            $model = new Task();
            $record = $model->findOrFail($id);
            $record->priority = ++$key;
            $record->save();
        }
    }
}
