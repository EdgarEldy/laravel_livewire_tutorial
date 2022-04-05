<div wire:ignore.self id="modalFormCustomer" data-backdrop="static" data-keyboard="false" aria-hidden="true"
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
                            @if($customer_id)
                                Update a customer
                            @else
                                Add a new customer
                            @endif
                        </h1>
                    </div>
                    <form wire:submit.prevent="submit">
                        <div class="form-group">
                            <label>First name :</label>
                            <input type="text" wire:model="first_name"
                                   class="form-control @error('first_name') is-invalid @enderror">
                            @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Last name :</label>
                            <input type="text" wire:model="last_name"
                                   class="form-control @error('last_name') is-invalid @enderror">
                            @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tel :</label>
                            <input type="text" wire:model="tel"
                                   class="form-control @error('tel') is-invalid @enderror">
                            @error('tel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="text" wire:model="email"
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" wire:model="address"
                                   class="form-control @error('address') is-invalid @enderror">
                            @error('address')
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
