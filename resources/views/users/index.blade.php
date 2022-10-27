@extends('layouts.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Users list</div>
            <div class="panel-body">
                <livewire:users.data/>
            </div>
        </div>
    </div>

@endsection()

@push('scripts')
    <script>
        const container = document.getElementById("modalFormUser");
        const modal = new bootstrap.Modal(container);

        window.addEventListener("close-modal", ({detail: {modalname}}) => {
            modal.hide();
        });

        window.addEventListener('open-modal', () => {
            modal.show();
        });
    </script>
@endpush
