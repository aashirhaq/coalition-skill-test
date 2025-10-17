@extends('master')

@section('title', 'Tasks')

@section('page-heading', 'Tasks')

@section('content')

<div class="col-12">
    <x-add-new-button :entity='$entity' />
    <div class="card shadow mb-4">
        {{-- <x-card-header-list total="$records->total()" /> --}}

        <div class="card-header py-3 d-flex justify-content-between align-items-center">

            <h6 class="m-0 font-weight-bold text-primary">{{ number_format($records->count()) }} Record(s)</h6>

            <form action="{{ route('tasks.update.priority') }}" method="post" class="text-end" style="display: none">
                @csrf

                <input id="sorted-id" type="hidden" name="sortedId">
                <button type="submit" class="btn btn-sm btn-primary" id="save-btn"><i class="fa fa-save"></i> Update Priority</button>
            </form>
        </div>



        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Project</th>
                            <th>Priority</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="sort">
                        @foreach ($records as $key => $record)
                            <tr id="{{ $record->id }}">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->project->name }}</td>
                                <td>{{ $record->priority }}</td>
                                <td>{{ $record->created_at }}</td>

                                <td class="text-center">
                                    <div class="btn-group">
                                        <x-edit-button :id="$record->id" :entity="str()->singular($entity)" />
                                        <x-delete-button :id="$record->id" :entity="str()->singular($entity)" />
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <x-no-records :count="$records->count()"/>
                    </tbody>
                </table>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <x-paginator :records='$records' />
                </div>
            </div> --}}
        </div>
    </div>
</div>

<x-success />
<x-fail />
@endSection
@push('extra-scripts')
    <!-- Jquery UI -->
    <script src="{{ asset('portal/js/jquery-ui-1.13.0/jquery-ui.min.js') }}"></script>

    <script>
        $('.sort').sortable({
            cursor: 'move',
            axis:   'y',
            update: function(e, ui) {
                $(this).sortable("refresh");
                sorted = $(this).sortable("toArray");
                $('#sorted-id').val(sorted)
                $('#sorted-id').parent().fadeIn()
            }
        });
    </script>
@endpush
