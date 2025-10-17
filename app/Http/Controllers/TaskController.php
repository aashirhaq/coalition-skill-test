<?php

namespace App\Http\Controllers;

use App\Http\Requests\{
    TaskStore,
    TaskUpdate,
    TaskUpdatePriority
};
use App\Http\Services\{
    ProjectService,
    RouterService,
    TaskService
};
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    protected $entity, $router, $routerService, $service;

    public function __construct()
    {
        $this->entity = 'tasks';
        $this->router = 'tasks.index';
        $this->service = new TaskService();
        $this->routerService = new RouterService();
    }

    public function index()
    {
        $entity = $this->entity;
        $records = $this->service->list(['project']);

        return view($this->router, compact('entity', 'records'));
    }

    public function create()
    {
        $entity = $this->entity;

        $projectSvc = new ProjectService();
        $projects = $projectSvc->all();

        return view($this->entity.'.create', compact('entity', 'projects'));
    }

    public function store(TaskStore $request)
    {
        $data = $request->validated();
        $message = 'Records successfully created.';
        $error = false;

        try {
            $this->service->create($data);
        } catch (\Exception $e) {
            $error = true;
            Log::error($e);
            $message = $e->getMessage();
        }

        return $this->routerService->redirect($this->router, $error, $message);
    }

    public function edit($id)
    {
        $entity = $this->entity;
        $record = $this->service->fetch($id);

        $projectSvc = new ProjectService();
        $projects = $projectSvc->all();

        return view($this->entity.'.edit', compact('entity', 'record', 'projects'));
    }

    public function update(TaskUpdate $request, $id)
    {
        $data = $request->validated();
        $message = 'Records successfully updated.';
        $error = false;

        try {
            $this->service->edit($data, $id);
        } catch (\Exception $e) {
            $error = true;
            Log::error($e);
            $message = $e->getMessage();
        }

        return $this->routerService->redirect($this->router, $error, $message);
    }

    public function updatePriority(TaskUpdatePriority $request)
    {
        $data = $request->validated();
        $message = 'Record successfully updated.';
        $error = false;

        try {
            $this->service->updatePriority($data);
        } catch (\Exception $e) {
            $error = true;
            $message = $e->getMessage();
            Log::error($e);
        }
        return $this->routerService->redirectBack($error, $message);
    }
}
