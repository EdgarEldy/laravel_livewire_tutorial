<div wire:ignore.self id="modalFormRole" data-backdrop="static" data-keyboard="false" aria-hidden="true"
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
                            @if($role_id)
                                Update a role
                            @else
                                Add a new role
                            @endif
                        </h1>
                    </div>
                    <form wire:submit.prevent="submit">
                        <div class="form-group">
                            <label>Role name :</label>
                            <input type="text" wire:model="name"
                                   class="form-control @error('name') is-invalid @enderror">
                            @error('role_name')
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
