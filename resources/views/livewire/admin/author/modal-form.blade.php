<!-- Modal -->
<div wire:ignore.self  class="modal fade" id="addAuthorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Author</h1>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form wire:submit.prevent="storeAuthor">
        <div class="modal-body">
            <div class="mb-3">
                <label for="">Author Name</label>
                <input type="text" wire:model.defer="name" class="form-control">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <input type="checkbox"  wire:model.defer="status"/>Checked=Hidden, Un-Checked= Visible
                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>



<!-- Author Update Modal -->
<div wire:ignore.self  class="modal fade" id="updateAuthorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Author</h1>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div wire:loading class="p-2">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>Loading...
      </div>
      <div wire:loading.remove>
        <form wire:submit.prevent="updateAuthor">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Author Name</label>
                    <input type="text" wire:model.defer="name" class="form-control">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  wire:model.defer="status" style="width:15px;height:15px;"/>Checked=Hidden, Un-Checked= Visible
                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Author Update Modal -->
<div wire:ignore.self  class="modal fade" id="deleteAuthorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Author</h1>
        <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div wire:loading class="p-2">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>Loading...
      </div>
      <div wire:loading.remove>
        <form wire:submit.prevent="destroyAuthor">
            <div class="modal-body">
                <h4>Are you sure you want to delete this data ?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Yes. Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



