@extends('layouts.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Product categories</div>
            <div class="panel-body">
                <button type="button" data-toggle="modal" data-target="#modalFormCategory"
                        class="btn btn-primary">
                    New
                </button>
                <!-- Categories data -->
                <livewire:categories.data/>
                <livewire:categories.form/>
            </div>
        </div>
    </div>

@endsection()

@push('scripts')
    <script>
        const container = document.getElementById("modalFormCategory");
        const modal = new bootstrap.Modal(container);

        window.addEventListener("close-modal", ({detail: {modalname}}) => {
            modal.hide();
        });
    </script>
@endpush
