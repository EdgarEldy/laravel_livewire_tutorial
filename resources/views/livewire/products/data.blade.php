<div>
    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead>
        <tr>
            <th>Id</th>
            <th>Category name</th>
            <th>Product name</th>
            <th>Unit Price</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}} </td>
                <td>{{$product->category->category_name}}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->unit_price }}</td>
                <td>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalFormProduct"
                                wire:click="$emit('editProduct', {{ $product->id }})">Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"
                                wire:click="$emit('popupDelete', {{ $product->id }})">Delete
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

        @this.on('popupDelete', productId => {
            Swal.fire({
                icon: 'warning',
                title: 'Do you want delete this product ?',
                showCancelButton: true,
                confirmButtonColor: '#E11D48',
                cancelButtonColor: '##1F2937',
                confirmButtonText: 'Remove',
                cancelButtonText: 'Close'
            }).then((result) => {
                if (result.value) {
                @this.call('delete', productId)
                }
            });
        });
        })
    </script>
@endpush
