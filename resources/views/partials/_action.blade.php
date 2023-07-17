<div class="btn-group" role="group">
    <form action="{{ $delete_url }}" class="form-group" method="post">
        @method('DELETE')
        @csrf
        <a href="{{ $edit_url }}" class="btn btn-md btn-warning">Edit</a>
        <button type="submit" class="btn btn-md btn-danger">Hapus</button>

    </form>
</div>
