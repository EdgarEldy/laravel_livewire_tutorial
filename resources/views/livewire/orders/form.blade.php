<div wire:ignore.self id="modalFormOrder" data-backdrop="static" data-keyboard="false" aria-hidden="true"
     aria-labelledby="addNew" class="modal fade" role="dialog"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-o">
                <div class="card p-3 p-lg-4">
                    <button type="button" wire:click="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-left text-md-left mb-4 mt-md-0">
                        <h1 class="mb-0 h4">
                            @if($order_id)
                                Update an order
                            @else
                                Add a new order
                            @endif
                        </h1>
                    </div>
                    <form wire:submit.prevent="submit">
                        <div class="form-group">
                            <label for="customers">Select a customer</label>
                            <select name="customer_id" wire:model="customer_id" class="form-control">
                                <option value="">---</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                            <div class="iinvalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categories">Select a category</label>
                            <select name="category_id" wire:model="category_id" class="form-control">
                                <option value="">---</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="iinvalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categories">Select a product</label>
                            <select name="product_id" wire:model="product_id" class="form-control">
                                <option value="">---</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                            <div class="iinvalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <input type="number" wire:model="unit_price"
                                   class="form-control @error('unit_price') is-invalid @enderror">
                            @error('unit_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Qty :</label>
                            <input type="number" wire:model="qty"
                                   class="form-control @error('qty') is-invalid @enderror">
                            @error('qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Total :</label>
                            <input type="number" wire:model="total"
                                   class="form-control @error('total') is-invalid @enderror">
                            @error('total')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" wire:click="closeModal" class="btn btn-secondary"
                                    data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
