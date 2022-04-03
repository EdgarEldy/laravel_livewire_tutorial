<div>
    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Tel</th>
            <th>Email</th>
            <th>Address</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}} </td>
                <td>{{$customer->first_name}}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->tel }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address }}</td>
                <td>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalFormCustomer"
                                wire:click="$emit('editCategory', {{ $customer->id }})">Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"
                                wire:click="$emit('popupDelete', {{ $customer->id }})">Delete
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $customers->links() }}
</div>


@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

        @this.on('popupDelete', customerId => {
            Swal.fire({
                icon: 'warning',
                title: 'Do you want delete this customer ?',
                showCancelButton: true,
                confirmButtonColor: '#E11D48',
                cancelButtonColor: '##1F2937',
                confirmButtonText: 'Remove',
                cancelButtonText: 'Close'
            }).then((result) => {
                if (result.value) {
                @this.call('delete', customerId)
                }
            });
        });
        })
    </script>
@endpush
