<div>
    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead>
        <tr>
            <th>Id</th>
            <th>Customer name</th>
            <th>Product name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}} </td>
                <td>{{$order->customer->full_name}}</td>
                <td>{{ $order->customer->last_name }}</td>
                <td>{{ $order->product->product_name }}</td>
                <td>{{ $order->product->unit_price }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->total }}</td>
                <td>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalFormOrder"
                                wire:click="$emit('editOrder', {{ $order->id }})">Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"
                                wire:click="$emit('popupDelete', {{ $order->id }})">Delete
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

        @this.on('popupDelete', orderId => {
            Swal.fire({
                icon: 'warning',
                title: 'Do you want delete this order ?',
                showCancelButton: true,
                confirmButtonColor: '#E11D48',
                cancelButtonColor: '##1F2937',
                confirmButtonText: 'Remove',
                cancelButtonText: 'Close'
            }).then((result) => {
                if (result.value) {
                @this.call('delete', orderId)
                }
            });
        });
        })
    </script>
@endpush
