@extends('layouts.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Customers list</div>
            <div class="panel-body">
                <button type="button" data-toggle="modal" data-target="#modalFormCustomer"
                        class="btn btn-primary">
                    New
                </button>
                <livewire:customers.data/>
                <livewire:customers.form/>
            </div>
        </div>
    </div>

@endsection()

@push('scripts')
    <script>
        const container = document.getElementById("modalFormCustomer");
        const modal = new bootstrap.Modal(container);

        window.addEventListener("close-modal", ({detail: {modalname}}) => {
            modal.hide();
        });

        window.addEventListener('open-modal', () => {
            modal.show();
        });
    </script>
@endpush
