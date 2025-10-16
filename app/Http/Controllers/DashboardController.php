<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $entity, $service;

    public function __construct()
    {
        $this->entity = 'dashboard';
        $this->service = new DashboardService();
    }

    public function index(Request $request)
    {
        $entity = $this->entity;
        return view('index', compact('entity'));
    }
}
