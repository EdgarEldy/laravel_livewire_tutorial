<div>
    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead>
        <tr>
            <th>Id</th>
            <th>Category name</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}} </td>
                <td>{{$category->category_name}}</td>
                <td>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalFormCategory"
                                wire:click="$emit('editCategory', {{ $category->id }})">Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"
                                wire:click="$emit('popupDelete', {{ $category->id }})">Delete
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</div>
