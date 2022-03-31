<div wire:ignore.self id="modalFormProduct" data-backdrop="static" data-keyboard="false" aria-hidden="true"
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
                            @if($product_id)
                                Update a product
                            @else
                                Add a new product
                            @endif
                        </h1>
                    </div>
                    <form wire:submit.prevent="submit">
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
                            <label>Product name :</label>
                            <input type="text" wire:model="product_name"
                                   class="form-control @error('product_name') is-invalid @enderror">
                            @error('product_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <input type="text" wire:model="unit_price"
                                   class="form-control @error('unit_price') is-invalid @enderror">
                            @error('unit_price')
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
