<!-- Edit Modal -->
<div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Kategori</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.update', $item) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Nama Produk</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="title" required
                                    value="{{ $item->title }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Link Gambar</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="image" required
                                    value="{{ $item->image }}">
                            </div>
                        </div>
                    </div>
                    @include('admin.components.button', ['submit' => 'submit', 'close' => 'close'])
                </form>
            </div>
        </div>
    </div>
</div>
