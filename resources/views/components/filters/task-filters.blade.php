<div class="col-12 collapse {{ Request::query('project') ? 'show' : null }}" id="filters-collapse">

    <form action="{{ route($entity.'.index') }}">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Filters</h6>
            </div>
            <div class="card-body">
                <div class="row">


                    <div class="form-group mt-2 col-md-3">
                        <label for="project">Project</label>
                        <select name="project" class="form-control">
                            <option value="">Select Project</option>
                            @foreach ($filters['projects'] as $item)
                                <option value="{{ $item->id }}" {{ Request::query('project') == $item->id ? 'selected' : null }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="card-footer text-end">
                <div class="btn-group">
                    @if (Request::query('project'))
                        <a href="{{ route($entity.'.index') }}" class="btn btn-sm btn-danger">Clear</a>
                    @endif
                    <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                </div>
            </div>
        </div>
    </form>
</div>
