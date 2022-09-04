@extends('layouts.app')

@section('content')

    <div class="container-fluid p-4 bg-info rounded-3 overflow-scroll">
        <h1 class="">School's Results</h1>

        <div class="fw-light mt-3">
            {!! $dataTable->table() !!}
        </div>
    </div>

@endsection

@push('scripts')

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>

    {!! $dataTable->scripts() !!}

@endpush