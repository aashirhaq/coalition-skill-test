@extends('master')

@section('title', Str::title($entity))

@section('content')

<div class="col-12">
    <div class="card shadow mb-4">
        <form action="{{ route($entity.'.update', [Str::singular($entity) => $record->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 form-group required">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') ?? $record->name }}" placeholder="Enter task name" required />

                        <x-form-error key="name" />
                    </div>




                    <div class="col-md-4 form-group required">
                        <label for="project">Project</label>
                        <select name="project" id="project" class="form-control form-control-sm @error('project') is-invalid @enderror" required>
                            @foreach ($projects as $item)
                                <option value="{{ $item->id }}" {{ old('project') || $record->project_id == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                            @endforeach
                        </select>

                        <x-form-error key="project" />
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <x-save-button />
            </div>
        </form>
    </div>
</div>

<x-success />
<x-fail />
@endsection
