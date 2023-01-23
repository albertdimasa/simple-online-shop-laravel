<!-- Edit Modal -->
<div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('produk.update', $item) }}" method="post">
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
                            <label class="col-sm-6 col-form-label">Deskripsi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="description" required
                                    value="{{ $item->description }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Link Gambar</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="image" required
                                    value="{{ $item->image }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Harga</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="price" required
                                    value="{{ $item->price }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Best Seller?</label>
                            <div class="col-sm-6">
                                <div class="form-check-inline mt-2">
                                    <input class="form-check-input" type="radio" name="is_best_seller" value="1"
                                        {{ $item->is_best_seller == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label">Ya</label>
                                    <span class="mr-2"></span>
                                    <input class="form-check-input" type="radio" name="is_best_seller" value="0"
                                        {{ $item->is_best_seller == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Kategori</label>
                            <div class="col-sm-6">
                                {{-- boostrap select --}}
                                <select class="form-control" name="category_id">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    @include('admin.components.button', ['submit' => 'submit', 'close' => 'close'])
                </form>
            </div>
        </div>
    </div>
</div>
