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
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}} </td>
                <td>{{$user->first_name}}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalFormUser"
                                wire:click="$emit('editUser', {{ $user->id }})">Edit
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
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
