<div>

@include('livewire.admin.author.modal-form')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Authors List
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addAuthorModal" class="btn btn-primary btn-sm float-end">Add Authors</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($authors as $author)
                            <tr>
                                <td>{{ $author->id}}</td>
                                <td>{{ $author->name}}</td>
                                <td>{{ $author->status == '1' ? 'hidden':'visible' }}</td>
                                <td>
                                    <a href="#" wire:click="editAuthor({{ $author->id }})" data-bs-toggle="modal" data-bs-target="#updateAuthorModal"  class="btn btn-sm btn-success">Edit</a>
                                    <a href="#" wire:click="deleteAuthor({{ $author->id }})" data-bs-toggle="modal" data-bs-target="#deleteAuthorModal"  class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5"> No Authors Found</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                    <div>
                        {{ $authors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@push('script')

    <script>
        window.addEventListener('close-modal', event =>{
            $('#addAuthorModal').modal('hide');
            $('#updateAuthorModal').modal('hide');
            $('#deleteAuthorModal').modal('hide');
        });
    </script>

@endpush
