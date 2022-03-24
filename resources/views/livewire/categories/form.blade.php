<div wire:ignore.self id="modalFormCategory" data-backdrop="static" data-keyboard="false" aria-hidden="true"
     aria-labelledby="addNew" class="modal fade" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    @if(!$category_id)
                        Create a new category
                    @else
                        Update a new category
                    @endif
                </h5>
                <button type="button" wire:click="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <label>Category name :</label>
                    <input type="text" wire:model="category_name"
                           class="form-control @error('category_name') is-invalid @enderror">
                    @error('category_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
